<?php

namespace Tests\Feature;

use App\Http\Livewire\Contact;
use App\Mail\ContactFormMail;
use App\Post;
use function factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Livewire\Livewire;
use function now;
use Tests\TestCase;

class ContactTest extends TestCase
{
    public function testContactPageLoads()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }

    public function testContactSubmitForm()
    {
        Mail::fake();

        $subject = 'how are you?';
        $email = 'john@doe.com';
        $name = 'Doe';
        $body = 'body';

        Livewire::test(Contact::class)
            ->set('subject', $subject)
            ->set('email', $email)
            ->set('name', $name)
            ->set('body', $body)
            ->call('submit');

        Mail::assertQueued(ContactFormMail::class, function (ContactFormMail $mailable) use ($subject, $email, $name, $body) {
            return $mailable->subject === $subject
                && $mailable->hasReplyTo($email, $name)
                && $mailable->body === $body;
        });
    }
}
