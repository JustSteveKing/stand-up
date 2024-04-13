<?php

declare(strict_types=1);

namespace App\Enums;

enum Mood: string
{
    case HAPPY = 'happy';//'😊';         // Happy face, for a good, productive day
    case SAD = 'sad';//'😞';           // Sad face, for a challenging or disappointing day
    case EXCITED = 'excited'; //'🤩';       // Star-struck, for days with exciting developments
    case FRUSTRATED = 'frustrated'; //'😤';    // Frustrated, for days full of obstacles
    case TIRED = 'tired'; //'😴';         // Tired, for feeling overworked or sleepy
    case NEUTRAL = 'neutral'; //'😐';       // Neutral, for an average, uneventful day
    case ANGRY = 'angry'; //'😠';         // Angry, for moments of significant irritation or conflict
    case ANXIOUS = 'anxious'; //'😰';       // Anxious, for feelings of worry or stress
    case OPTIMISTIC = 'optimistic'; //'🙂';    // Optimistic, feeling hopeful about the future
    case PENSIVE = 'pensive'; //'🤔';       // Pensive, deep in thought or contemplative
    case SURPRISED = 'surprised'; //'😮';     // Surprised, for unexpected outcomes or news
    case SICK = 'sick'; //'🤒';          // Sick, feeling unwell or under the weather
    case CONFIDENT = 'confident'; //'😎';     // Confident, feeling self-assured and in control
    case DISAPPOINTED = 'disappointed'; //'😞';  // Disappointed, a less intense version of sadness
    case AMUSED = 'amused'; //😄';        // Amused, finding joy or humor in the day's events
    case RELIEVED = 'relieved'; //'😌';      // Relieved, feeling a release of stress or worry
    case INDIFFERENT = 'indifferent'; //'😶';   // Indifferent, having no particular feelings or concerns
    case GRATEFUL = 'grateful'; //'🙏';      // Grateful, feeling thankful for specific aspects of the day
    case INSPIRED = 'inspired'; //'✨';      // Inspired, feeling a burst of creativity or motivation
    case CONFUSED = 'confused'; //'😕';      // Confused, when things are unclear or hard to understand
}
