<?php
namespace App\Repositories\Feedback;

use App\Entity\Feedback;

interface FeedbackRepositoryInterface
{
    public function getFeedback();
    public function saveFeedback(Feedback $feedback) :Feedback;
}