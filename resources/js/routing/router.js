import Vue from "vue";
import VueRouter from "vue-router";
import auth from "./../services/auth/auth";

auth.init();
Vue.use(VueRouter);

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: () => import("./../pages/market/HomePage.vue")
        },
        {
            path: "/register",
            name: "register",
            component: () => import("./../pages/auth/RegisterPage.vue")
        },
        {
            path: "/login",
            name: "login",
            component: () => import("./../pages/auth/LoginPage.vue")
        },
        {
            path: "/admin",
            name: "admin",
            component: () => import("./../pages/admin/AdminPage.vue"),
            meta: {
                requiresAuth: true,
                is_admin: true
            }
        },
        {
            path: "/blog",
            name: "posts",
            component: () => import("./../pages/blog/PostPage.vue"),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/blog/post/:title",
            name: "post",
            component: () => import("./../pages/blog/SinglePost.vue"),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/contact",
            name: "contact",
            component: () =>
                import ('./../pages/service/ContactPage.vue'),
                meta: {
                    requiresAuth: true,
                    is_user: true
                }
        },
        {
            path: "/confirm",
            name: "confirm",
            component: () =>
                import('./../pages/market/ConfirmPage.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/contact-confirm",
            name: "contact-confirm",
            component: () =>
                import('./../pages/market/AcceptContact.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/subscribe-confirm",
            name: "subconfirm",
            component: () =>
                import('./../pages/market/AcceptSubscribe.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/wishlist",
            name: "wishlist",
            component: () =>
                import ('./../pages/market/WishlistPage.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/cart",
            name: "cart",
            component: () =>
                import ('./../pages/market/CartPage.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/catalog/:slug",
            name: "catalog",
            component: () =>
                import ('./../pages/market/CatalogPage.vue')
        },
        {
            path: "/checkout",
            name: "checkout",
            component: () =>
                import ('./../pages/market/CheckoutPage.vue'),
        },
        {
            path: "/catalog/product/:title",
            name: "product",
            component: () =>
                import ('./../pages/market/ProductPage.vue'),
            meta: {
                requiresAuth: true,
                is_user: true
            }
        },
        {
            path: "/about",
            name: "about",
            component: () => import("./../pages/service/AboutPage.vue")
        },
        {
            path: "/delivery",
            name: "delivery",
            component: () => import("./../pages/service/DeliveryPage.vue")
        },
        {
            path: "/discounts",
            name: "discounts",
            component: () => import("./../pages/service/DiscountsPage.vue")
        },
        {
            path: "/faq",
            name: "faq",
            component: () => import("./../pages/service/FaqPage.vue")
        },
        {
            path: "/guarantee",
            name: "guarantee",
            component: () => import("./../pages/service/GuaranteePage.vue")
        },
        {
            path: "/:pathMatch(.*)*",
            name: "not-found",
            component: () => import("./../pages/auth/PageNotFound.vue")
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (!auth.loggedIn()) {
            next({ name: "login" });
        } else {
            let user = JSON.parse(localStorage.getItem("user"));
            if (to.matched.some(record => record.meta.is_admin)) {
                if (user.is_admin == 1) {
                    next();
                } else {
                    next({ name: "home" });
                }
            } else if (to.matched.some(record => record.meta.is_user)) {
                if (user.is_admin == 0) {
                    next();
                } else {
                    next({ name: "admin" });
                }
            }
            next();
        }
    } else {
        next();
    }
});

export default router;
