<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AI Autofill Example</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>

</head>
<body class="font-sans antialiased">
    <div class="bg-[#F2C94C] text-[#0d111c]">
        <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#c2205e] selection:text-white">
            <div class="relative w-full max-w-4xl px-6 lg:max-w-7xl">

                <header class="items-center gap-2 pt-10 pb-4">
                    <div class="text-center flex-row items-center justify-center">
                        <a href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="mx-auto h-12 w-auto text-[#0d111c]"><rect width="256" height="256" fill="none"/><polygon points="127.2 24 112 88 168 113.14 72.8 216 88 152 32 126.86 127.2 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="232 216 196 144 160 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="220" y1="192" x2="172" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                        <h1 class="text-2xl font-bold">AI Autofill Example</h1>
                        </a>
                    </div>
                </header>

                <main>

                    <div class="rounded-md bg-blue-50 p-4 mb-6">
  <div class="flex">
    <div class="flex-shrink-0">
      <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M119.83,56A52,52,0,0,0,76,32a51.92,51.92,0,0,0-3.49,44.7A49.28,49.28,0,0,0,64,104v8a48,48,0,0,0,48,48h48a48,48,0,0,0,48-48v-8a49.28,49.28,0,0,0-8.51-27.3A51.92,51.92,0,0,0,196,32a52,52,0,0,0-43.83,24Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M104,232V192a32,32,0,0,1,32-32h0a32,32,0,0,1,32,32v40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M104,208H72a32,32,0,0,1-32-32A32,32,0,0,0,8,144" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
    </div>
    <div class="ml-3 flex-1 md:flex md:justify-between">
      <p class="text-sm text-blue-700">This is a demo of <a href="https://github.com/ashleyhindle/laravel-ai-autofill" class="text-xs text-[#c2205e] hover:text-gray-800"><code>laravel-ai-autofill</code></a> to autofill model properties on save</p>
      <p class="mt-3 text-sm md:ml-6 md:mt-0">
        <a href="https://github.com/ashleyhindle/laravel-ai-autofill" class="whitespace-nowrap font-medium text-blue-700 hover:text-blue-600">
          Get Package
          <span aria-hidden="true"> &rarr;</span>
        </a>
      </p>
    </div>
  </div>
</div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif

                    <div class="grid grid-cols-11">
                        <div class="col-span-5">
                            <h2 class="text-2xl font-bold">Article form</h2>
                            <form action="{{ route('articles.store') }}" method="POST" class="relative mb-8">
                                @csrf
                                <div class="bg-white overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                    <label for="title" class="sr-only">Title</label>
                                    <input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" placeholder="Title" value="Five ways to avoid burnout">
                                    <label for="description" class="sr-only">Description</label>
                                    <textarea rows="7" name="description" id="description" class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Write a description...">As the nights draw in our energy levels will dip, but the demands placed upon us probably won't. Here's how to avoid burnout

While the trees begin to shed their leaves and slip into a long slumber this autumn (here in the UK at least), we humans have no such luxury. Life continues at the same relentless pace into the darker months, just as the desire to hunker down increases. It puts us at risk of fatigue or – worse – burnout, which research suggests is a growing issue.

 According to a report by Glassdoor – a website where employees anonymously rate their employers – reviews mentioning burnout have reached the highest level since the company started tracking data in 2016.

Meanwhile, the pervasiveness of technology, the constant barrage of bad news via mainstream news outlets, and cost of living pressures all serve to ramp up cortisol levels. Here's how to bring them down and avoid burnout.


1. Tick off the basics
Getting enough sleep, eating well and exercising are the cornerstones of good mental and physical health. Other activities, such as journaling, reading and yoga have been shown to lower cortisol levels. Even a walk in the woods can help. "Studies show that people who regularly go for walks in a forest or in green spaces have lower levels of cortisol," says Rose Abbott, a GP.

Image: Christina Deravedisian


2. Introduce 'healthy stress' to your life
"The sabre-tooth tiger is not outside the cave any more, but we think it is," says mental health coach Anthony Mullally, pointing out that modern stresses such as deadlines elicit the same 'fight or flight' response as the tiger. "Learning to manage small stresses such as exposure to cold water helps us contextualise the threat … and build tolerance," he says. Mindful breathing also helps. "It regulates the nervous system," adds Mullally.

Image: Jorge Fernandez

Solutions every Saturday
Uplift your inbox with our weekly newsletter. Positive News editors select the week's top stories of progress, bringing you the essential briefing about what's going right.
Sign up

3. Set boundaries – and stick to them
As the poet Robert Frost wrote: "Good fences make good neighbours." It's also important to set boundaries with yourself. "When we define what we need to feel secure and healthy … and protect those parts of ourselves, we can do wonders for our wellbeing," writes therapist Joe Sanok in a blog. Boundaries may include the hours you work, how much screen time you have, or when you go to bed.

Image: AbsolutVision


4. Shape your definition of success
Success is a slippery concept. For some, it's about having meaningful relationships and fulfilling experiences, for others it's tied to career wins and financial gains. Defining what success means to you is a first step towards establishing priorities in life, enabling a focus of energy on the things that matter to you. Challenge your definition, too. Is success really a fancy new car, or actually working less?

Image: Johen Redman


5. Avoid workplaces where burnout is normalised
The latest State of the Global Workforce report suggests that 40% of UK employees are stressed. But how do we avoid lurching from one toxic job to another? "Watch out for red flags [in the recruitment process]," says Joel Lalgee, host of the Recruiting is No Joke podcast. "Poor communication, ghosting, endless rounds of interviews, repetitive questions and untrained interviewers" are bad signs, he adds.

Image: Priscilla du Preez

Main image: LightFieldStudios
</textarea>

                                    <div class="bg-blue-50 border-t border-blue-100 p-2 text-sm">
                                        <p class="text-blue-700"><strong>AI will autofill these properties:</strong></p>
                                        <ul class="list-disc list-inside text-blue-600 mt-1">
                                            <li>Tagline: A super click-baity obnoxious tagline</li>
                                            <li>SEO Description: A concise SEO description</li>
                                            <li>Tags: Up to 5 unique lowercase tags</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="absolute inset-x-px bottom-0">
                                    <div class="flex justify-end p-2">
                                        <button type="submit" class="inline-flex items-center bg-[#c2205e] px-4 py-2 text-sm font-semibold text-white hover:bg-[#F2C94C] hover:text-[#0d111c] shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-span-1 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#c2205e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="col-span-5">
                            <h2 class="text-2xl font-bold">Latest Article</h2>
                            @if(isset($articles) && $articles->count() > 0)
                                @php
                                    $latestArticle = $articles->first();
                                @endphp
                                <div class="bg-white overflow-hidden rounded-lg border border-gray-300 shadow-sm">
                                    <div class="p-4">
                                        <h3 class="text-lg font-medium">{{ $latestArticle->title }}</h3>
                                        <p class="text-gray-900 sm:text-sm sm:leading-6 max-h-[9.4rem] overflow-y-scroll">
                                            @if(strlen($latestArticle->content) > 350)
                                                {!! nl2br(Str::limit($latestArticle->content, 350)) !!}
                                            @else
                                                {{ $latestArticle->content }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="bg-blue-50 border-t border-blue-100 p-2 text-xs">
                                        <p class="text-blue-700"><strong>AI-generated properties:</strong></p>
                                        <ul class="text-blue-600 mt-1">
                                            <li><strong>Tagline:</strong> {{ $latestArticle->tagline }}</li>
                                            <li><strong>SEO Description:</strong> {{ $latestArticle->seo_description }}</li>
                                        </ul>
                                        <div class="flex flex-wrap gap-1 mt-1">
                                            @php
                                                $tags = explode(',', $latestArticle->tags);
                                            @endphp
                                            @foreach($tags as $tag)
                                                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-0.5 rounded">
                                                    #{{ trim($tag) }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="text-gray-600">No articles found.</p>
                            @endif
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 gap-2 mt-8">
                        <div class="md:col-span-2">
                            <h2 class="text-2xl font-bold">Create a new meeting note</h2>
                            <form action="{{ route('meeting-notes.store') }}" method="POST" class="relative mb-8">
                                @csrf
                                <div class="bg-white overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500">
                                    <label for="title" class="sr-only">Title</label>
                                    <input type="text" name="title" id="title" class="block w-full border-0 pt-2.5 text-lg font-medium placeholder:text-gray-400 focus:ring-0" placeholder="Meeting Title" value="AuctionStream Inc. Q3 2024 Quarterly Meeting">
                                    <label for="content" class="sr-only">Content</label>
                                    <textarea rows="7" name="content" id="content" class="block w-full resize-none border-0 py-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Write meeting notes...">Meeting Notes: AuctionStream Inc.
Date: September 7, 2024
Time: 10:00 AM - 11:30 AM
Attendees: 35 out of 40 team members present

Opening Remarks (CEO, Sarah Chen):

Welcomed team and thanked everyone for their hard work on the recent platform update
Highlighted 25% increase in user engagement since the update
Product Development Update (CTO, Alex Rodriguez):

New mobile app version (v3.2) to be released next week
Key features: improved bidding interface, real-time notifications, and AR preview for select items
Beta testing feedback has been overwhelmingly positive
Marketing Update (CMO, Jasmine Patel):

Instagram influencer campaign reached 2 million impressions
Preparing for upcoming podcast ad spots on "Tech Today" and "The Collector's Corner"
New blog series "Auction Insider" launching next month
Sales Report (Head of Sales, Michael Thompson):

Onboarded 15 new high-profile auction houses this quarter
Revenue up 18% compared to last quarter
Identified potential partnership with major art gallery chain
Customer Support (Head of CS, Emma Lewis):

Average response time down to 2.5 minutes
Implemented new AI chatbot, handling 40% of initial inquiries
Planning to hire 3 new CS representatives next month
Finance Update (CFO, David Goldstein):

Current burn rate sustainable for next 18 months
Exploring Series B funding options, targeting $30 million raise
New expense tracking system to be implemented next week
HR Announcements (HR Manager, Lisa Chen):

Two new developers starting next week
Annual team building retreat scheduled for October 15-17
Reminder about open enrollment for benefits package
Open Floor Discussion:

Suggestion to implement cryptocurrency payment options
Concerns raised about server capacity for upcoming holiday season
Ideas shared for improving seller onboarding process
Action Items:

Alex to prepare detailed report on server capacity and scaling options
Jasmine to finalize Q4 marketing budget
Michael to schedule follow-up meeting with art gallery chain representatives
Emma to begin interviews for new CS representatives
David to prepare pitch deck for potential investors
Meeting adjourned at 11:35 AM. Next all-hands meeting scheduled for September 21, 2024.</textarea>

                                    <div class="bg-blue-50 border-t border-blue-100 p-2 text-sm">
                                        <p class="text-blue-700"><strong>AI will autofill these properties:</strong></p>
                                        <ul class="list-disc list-inside text-blue-600 mt-1">
                                            <li>Summary</li>
                                            <li>Action Items</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="absolute inset-x-px bottom-0">
                                    <div class="flex justify-end p-2">
                                        <button type="submit" class="inline-flex items-center bg-[#c2205e] px-4 py-2 text-sm font-semibold text-white hover:bg-[#F2C94C] hover:text-[#0d111c] shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-[#c2205e]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </div>

                        <div class="md:col-span-2">
                            <h2 class="text-2xl font-bold mb-4">Latest Meeting Note</h2>
                            @if(isset($meetingNotes) && $meetingNotes->count() > 0)
                                @php
                                    $latestNote = $meetingNotes->first();
                                @endphp
                                <div class="bg-white overflow-hidden rounded-lg border border-gray-300 shadow-sm">
                                    <div class="p-4">
                                        <h3 class="text-lg font-medium">{{ $latestNote->title }}</h3>
                                        <p class="text-gray-900 sm:text-sm sm:leading-6">
                                            @if(strlen($latestNote->content) > 300)
                                                {!! nl2br(Str::limit($latestNote->content, 300)) !!}
                                            @else
                                                {{ $latestNote->content }}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="bg-blue-50 border-t border-blue-100 p-2 text-xs">
                                        <p class="text-blue-700"><strong>AI-generated properties:</strong></p>
                                        <ul class="list-disc list-inside text-blue-600 mt-1">
                                            <li>Summary: {{ $latestNote->summary }}</li>
                                            <li>Action Items:<br/>
                                                @php
                                                    $formattedTags = array_map(function($tag) {
                                                        return "- " . trim($tag);
                                                    }, json_decode($latestNote->action_items));
                                                    echo implode("<br/>", $formattedTags);
                                                @endphp
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-4 py-2">
                                        <p class="text-xs text-gray-400">Created at: {{ $latestNote->created_at->format('Y-m-d H:i:s') }}</p>
                                    </div>
                                </div>
                            @else
                                <p class="text-gray-600">No meeting notes found.</p>
                            @endif
                        </div>
                    </div>
                </main>

                <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </footer>
            </div>
        </div>
    </div>
</div>
</body>
</html>
