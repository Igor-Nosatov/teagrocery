<?php
namespace App\Repositories\Feedback;

use App\Entity\Feedback;

final class FeedbackRepository implements FeedbackRepositoryInterface
{
    public function getFeedback()
    {
     return Feedback::query();
    }
    
    public function saveFeedback(Feedback $feedback) :Feedback
    {
        $feedback->save();
        return $feedback;
    }
}