<?php
     namespace App\Http\Controllers;

     use App\Http\Requests\ContactFormRequest;
     use App\Models\Contact;
     use App\Models\Submission;
     use Illuminate\Support\Facades\Log;
     use Illuminate\Support\Facades\Storage;

     class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function projects()
    {
        return view('projects');
    }

    public function resume()
    {
        return view('resume');
    }

    public function showForm()
    {
        return view('contact', ['title' => 'Contact']);
    }

    public function submitForm(ContactFormRequest $request)
    {
        $validated = $request->validated();

        $contact = Contact::firstOrCreate(
            ['email' => $validated['email']],
            ['name' => $validated['name'], 'phone' => $validated['phone']]
        );

        $filePath = null;
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('uploads', 'public');
        }

        $submission = Submission::create([
            'contact_id' => $contact->id,
            'message' => $validated['message'],
            'file_path' => $filePath,
        ]);

        Log::info('Form Submission', [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'file' => $filePath,
        ]);

        $response = redirect()->route('contact.confirmation', ['submission' => $submission->id])
            ->with('success', 'Form submitted successfully!');

        if ($filePath) {
            $response->cookie('file_uploaded', 'true', 60);
        }

        return $response;
    }

    public function showConfirmation(Submission $submission)
    {
        return view('contact.confirmation', [
            'title' => 'Submission Confirmation',
            'submission' => $submission,
            'contact' => $submission->contact,
        ]);
    }
}