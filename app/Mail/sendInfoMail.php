<?php

namespace App\Mail;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendInfoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Member $member)
    {
        $this->member=$member;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.SendInfo',[
            'id'=> $this->member->id,
            'first_name'=> $this->member->first_name,
            'last_name'=> $this->member->last_name,
            'email'=> $this->member->email,
            'mobile_no'=> $this->member->mobile_no,
            'home_district'=> $this->member->home_district,
            'education_qualification'=> $this->member->education_qualification,
            'file_no'=> $this->member->file_no,
            'department'=> $this->member->department,
            'status'=> $this->member->status,
            'designation'=> $this->member->designation,
            'dateOfBirth'=> $this->member->dateOfBirth,
            'firstJointOfDate'=> $this->member->firstJointOfDate,
            'presentJointOfDate'=> $this->member->presentJointOfDate,
            'dateOfReturn'=> $this->member->dateOfReturn,
            'remarks'=> $this->member->remarks,


        ]);
    }
}
