<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChurchHistory;

class ChurchHistorySeeder extends Seeder
{
    public function run()
    {
        $events = [
            [
                'year' => 33,
                'event' => 'Pentecost',
                'description' => <<<TEXT
The Day of Pentecost, occurring fifty days after Jesus' resurrection, marked the dramatic birth of the Christian Church as recorded in Acts 2. As 120 disciples gathered in Jerusalem for the Jewish festival, the Holy Spirit descended with "a sound like a mighty rushing wind" and "tongues of fire" resting on each believer. This supernatural event empowered the disciples to speak in various languages, astonishing international pilgrims visiting for the feast.

Peter delivered the first Christian sermon, explaining this phenomenon as the fulfillment of Joel's prophecy. His message about Christ's death and resurrection convicted many listeners, leading to about 3,000 conversions and baptisms that day. This event established key Christian practices: communal living, apostolic teaching, breaking of bread, and prayer. The Pentecost miracle reversed the Tower of Babel's linguistic confusion, symbolizing the gospel's universal reach. Early Church Fathers like Augustine later interpreted Pentecost as the Church's birthday and the Holy Spirit's permanent indwelling in believers.
TEXT
            ],
            [
                'year' => 325,
                'event' => 'Council of Nicaea',
                'description' => <<<TEXT
Convened by Emperor Constantine I, the First Council of Nicaea was Christianity's first ecumenical council, addressing the Arian controversy over Jesus' divinity. 318 bishops attended from across the Roman Empire, including notable figures like Athanasius of Alexandria and Eusebius of Caesarea. The council debated whether Christ was "of similar substance" (homoiousios) or "same substance" (homoousios) as the Father.

After two months of intense theological debate, the council affirmed the Homoousion doctrine and established the original Nicene Creed declaring Christ "true God from true God, begotten not made." This settled the Trinitarian controversy and set precedent for future councils. The council also standardized Easter date calculations and issued 20 canons addressing church discipline. Though Arianism persisted for decades, Nicaea became foundational for orthodox Christology. The council's legacy includes establishing conciliar governance and imperial involvement in church affairs, shaping Christianity's institutional development.
TEXT
            ],
            [
                'year' => 381,
                'event' => 'First Council of Constantinople',
                'description' => <<<TEXT
This second ecumenical council, convened by Emperor Theodosius I, finalized the Nicene Creed as recognized today. It addressed the Macedonian heresy denying the Holy Spirit's divinity and residual Arianism in the Eastern Empire. 150 bishops participated, including Gregory of Nazianzus who initially presided. The council expanded the Creed's third article to affirm the Spirit's worship and glory with the Father and Son.

Key outcomes included:
1. Condemnation of Apollinarism (denying Christ's human mind)
2. Establishment of Constantinople's primacy as "New Rome"
3. Prohibition of bishop transfers between sees
4. Formal ratification of Nicaea's decisions

The council's Creed became standard in Eastern and Western liturgies. It completed the Trinitarian doctrine framework, establishing the Holy Spirit's full divinity. The council also demonstrated growing East-West ecclesiastical tensions that would later culminate in the Great Schism.
TEXT
            ],
            [
                'year' => 1054,
                'event' => 'East-West Schism',
                'description' => <<<TEXT
The Great Schism permanently divided Christianity into Eastern Orthodox and Roman Catholic branches, resulting from centuries of growing theological, political, and cultural differences. Immediate causes included:
- Disputes over papal authority (Roman primacy vs pentarchy)
- Filioque clause addition to Nicene Creed
- Use of unleavened bread in Eucharist
- Celibacy requirements for clergy

In July 1054, Cardinal Humbert excommunicated Patriarch Michael I Cerularius, who reciprocated. Fundamental differences included:
1. Ecclesiology: Rome's universal jurisdiction vs collegial autocephalous churches
2. Theology: Scholasticism vs apophatic tradition
3. Liturgy: Latin practices vs Byzantine rites
4. Church-state relations: Papal independence vs Caesaropapism

The crusades (especially 1204 Sack of Constantinople) deepened animosities. Despite 1965 mutual excommunication lifts, differences persist. The schism shaped European history, influencing the Reformation and East-West geopolitics.
TEXT
            ],
            [
                'year' => 1517,
                'event' => 'Protestant Reformation',
                'description' => 'Martin Luther posts 95 Theses, sparking the Protestant Reformation.'
            ],
            [
                'year' => 1545,
                'event' => 'Council of Trent',
                'description' => 'Catholic Counter-Reformation addressing Protestant challenges.'
            ],
            [
                'year' => 1738,
                'event' => 'Wesleyan Revival',
                'description' => 'John Wesley\'s conversion sparks the Methodist movement.'
            ],
            [
                'year' => 1910,
                'event' => 'Edinburgh Missionary Conference',
                'description' => 'Launch of modern ecumenical movement and global missions.'
            ],
        ];

        // Clear existing data
        ChurchHistory::truncate();

        // Insert sample data
        foreach ($events as $event) {
            ChurchHistory::create($event);
        }
    }
}
