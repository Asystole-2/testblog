<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChurchHistory;

class TheologyController extends Controller
{

    public function index()
    {
        return view('theology.index');
    }

    public function timeline()
    {
        $events = ChurchHistory::orderBy('year')
            ->paginate(10);

        return view('theology.timeline', [
            'events' => $events,
            'eras' => ChurchHistory::historicalPeriods()
        ]);
    }

    public function doctrine($topic)
    {
        $doctrines = [
            'trinity' => [
                'title' => 'The Trinity',
                'content' => <<<HTML
                <h3 class="text-2xl font-bold mb-4">The Triune God</h3>
                <p class="mb-4">The Christian doctrine of the Trinity teaches:</p>
                <ul class="list-disc pl-6 mb-4">
                    <li>There is one God who exists eternally in three distinct persons</li>
                    <li>Father, Son (Jesus Christ), and Holy Spirit</li>
                    <li>Each person is fully God, co-equal and co-eternal</li>
                </ul>
                <p class="mb-4">Biblical basis: Matthew 28:19, 2 Corinthians 13:14</p>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-bold mb-2">Historical Development:</h4>
                    <p>Formally defined at the Council of Nicaea (325 AD) and Constantinople (381 AD)</p>
                </div>
HTML
            ],
            'incarnation' => [
                'title' => 'The Incarnation',
                'content' => <<<HTML
                <h3 class="text-2xl font-bold mb-4">God in Human Flesh</h3>
                <p class="mb-4">Key aspects of Christ's incarnation:</p>
                <ul class="list-disc pl-6 mb-4">
                    <li>Jesus is fully God and fully human (John 1:14)</li>
                    <li>Virgin birth (Isaiah 7:14, Luke 1:35)</li>
                    <li>Sinless life (Hebrews 4:15)</li>
                    <li>Two natures in one person (Hypostatic Union)</li>
                </ul>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h4 class="font-bold mb-2">Church Councils:</h4>
                    <p>Defined at Chalcedon (451 AD) against various heresies</p>
                </div>
HTML
            ],
            'salvation' => [
                'title' => 'Salvation',
                'content' => <<<HTML
                <h3 class="text-2xl font-bold mb-4">Plan of Redemption</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="bg-green-50 p-4 rounded-lg">
                        <h4 class="font-bold mb-2">Protestant View</h4>
                        <p>Sola Fide (Faith Alone)<br>
                        Ephesians 2:8-9</p>
                    </div>
                    <div class="bg-purple-50 p-4 rounded-lg">
                        <h4 class="font-bold mb-2">Catholic View</h4>
                        <p>Faith and Works<br>
                        James 2:26</p>
                    </div>
                </div>
                <p class="mb-4">Key components:</p>
                <ol class="list-decimal pl-6 mb-4">
                    <li>Justification</li>
                    <li>Sanctification</li>
                    <li>Glorification</li>
                </ol>
HTML
            ],
            'eschatology' => [
                'title' => 'Last Things',
                'content' => <<<HTML
                <h3 class="text-2xl font-bold mb-4">End Times Theology</h3>
                <div class="bg-yellow-50 p-4 rounded-lg mb-4">
                    <h4 class="font-bold mb-2">Major Views:</h4>
                    <ul class="list-disc pl-6">
                        <li>Premillennialism</li>
                        <li>Amillennialism</li>
                        <li>Postmillennialism</li>
                    </ul>
                </div>
                <p class="mb-4">Key events (1 Thessalonians 4:16-17):</p>
                <ul class="list-disc pl-6">
                    <li>Second Coming of Christ</li>
                    <li>Resurrection of the Dead</li>
                    <li>Final Judgment</li>
                </ul>
HTML
            ],
            'ecclesiology' => [
                'title' => 'Nature of the Church',
                'content' => <<<HTML
                <h3 class="text-2xl font-bold mb-4">The Body of Christ</h3>
                <p class="mb-4">Four marks of the Church (Nicene Creed):</p>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <div class="text-center bg-red-50 p-4 rounded-lg">
                        <h4 class="font-bold">One</h4>
                        <p>Ephesians 4:4-6</p>
                    </div>
                    <div class="text-center bg-blue-50 p-4 rounded-lg">
                        <h4 class="font-bold">Holy</h4>
                        <p>1 Peter 2:9</p>
                    </div>
                    <div class="text-center bg-green-50 p-4 rounded-lg">
                        <h4 class="font-bold">Catholic</h4>
                        <p>Universal</p>
                    </div>
                    <div class="text-center bg-purple-50 p-4 rounded-lg">
                        <h4 class="font-bold">Apostolic</h4>
                        <p>Matthew 16:18</p>
                    </div>
                </div>
HTML
            ]
        ];

        $allTopics = array_keys($doctrines);

        return view('theology.doctrine', [
            'topic' => $doctrines[$topic]['title'] ?? ucfirst($topic),
            'content' => $doctrines[$topic]['content'] ?? '<p class="text-red-500">Doctrine not found</p>',
            'allDoctrines' => $doctrines,
            'currentTopic' => $topic
        ]);
    }
}
