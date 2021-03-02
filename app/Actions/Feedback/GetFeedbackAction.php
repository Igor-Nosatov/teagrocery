<?php

declare(strict_types=1);

namespace App\Actions\Feedback;

use Illuminate\Http\Request;
use App\Repositories\Feedback\FeedbackRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Entity\Feedback;

final class GetFeedbackAction
{
    private $feedbackRepository;

    public function __construct(FeedbackRepositoryInterface $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function execute($id)
    {
        return $this->feedbackRepository
            ->getFeedback()
            ->where('product_id', $id)
            ->get();
    }
}
