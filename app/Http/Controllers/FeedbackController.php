<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Actions\Feedback\GetFeedbackAction;
use App\Actions\Feedback\SaveFeedbackAction;
use App\Entity\Feedback;

class FeedbackController extends Controller
{
    private $getFeedback;
    private $saveFeedback;

    public function __construct(
        GetFeedbackAction $getFeedback,
        SaveFeedbackAction $saveFeedback
    )
    {
        $this->getFeedback = $getFeedback;
        $this->saveFeedback = $saveFeedback;
    }

    public function show($id)
    {
        $data['feedback']  = $this->getFeedback->execute($id);
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        return  $this->saveFeedback->execute($request);
    }
}
