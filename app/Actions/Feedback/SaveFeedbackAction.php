<?php

declare (strict_types = 1);

namespace App\Actions\Feedback;

use Illuminate\Http\Request;
use App\Repositories\Feedback\FeedbackRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use App\Entity\Feedback; 

final class SaveFeedbackAction
{
    private $feedbackRepository;

    public function __construct(FeedbackRepositoryInterface $feedbackRepository)
    {
        $this->feedbackRepository = $feedbackRepository;
    }

    public function execute(Request $request)
    {
        $feedback = new Feedback();
        $feedback->star = $request->input('star');
        $feedback->name = $request->input('name');
        $feedback->email = $request->input('email');
        $feedback->phone = $request->input('phone');
        $feedback->message = $request->input('message');
        $feedback->user_id = Auth::id();
        $feedback->product_id = $request->input('product_id');
        
        return $this->feedbackRepository->saveFeedback($feedback);
    }
}


