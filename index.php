<?php

//Brandon Walsh

header('Content-Type: text/html');

$items = simplexml_load_file('gmls4.xml');  //load xml file

for($i = 0; $i < count($items->channel->item); $i = $i + 1) {   //for every item
    $forum_id = $items->channel->item[$i]->children('wp', true)->post_parent;   //get forum id from each item

    $items->channel->item[$i]->children('wp', true)->post_type = "thread";  //change post type to thread

    //<category domain="thread_category" nicename="test-category"><![CDATA[Test Category]]></category> //synatx for xml category elements

    switch($forum_id) {
        case 53056: //Announcements
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Announcements]]>');   //add category to xml post/topic
            $child->addAttribute("domain", "thread_category");  //default ForumEngine category domain
            $child->addAttribute("nicename", "announcements");  //nicename corresponds to category slug in wp-admin
            break;
        case 53057: //LS4 Engine
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[LS4 Engine]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "ls4-engine");
            break;
        case 53058: //Transmission
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Transmission]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "transmission");
            break;
        case 53059: //Tuning & Diagnostics
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Tuning & Diagnostics]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "tuning-diagnostics");
            break;
        case 53060: //Exhaust
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Exhaust]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "exhaust");
            break;
        case 53061: //Suspension/Brakes & Wheels/Tires
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Suspension/Brakes & Wheels/Tires]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "suspensionbrakes-wheelstires");
            break;
        case 53062: //Mods, How-To’s & DIY’s
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Mods, How-To’s & DIY’s]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "mods-how-tos-diys");
            break;
        case 53063: //Electronics & Audio
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Electronics & Audio]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "electronics-audio");
            break;
        case 53064: //Detailing, Appearance & Interior/Exterior Mods
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Detailing, Appearance & Interior/Exterior Mods]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "detailing-appearance-interiorexterior-mods");
            break;
        case 53065: //General Tech Talk
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[General Tech Talk]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "general-tech-talk");
            break;
        case 53066: //The ADMIN Lounge
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[The ADMIN Lounge]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "the-admin-lounge");
            break;
        case 53067: //Dom’s Corner
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Dom’s Corner]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "doms-corner");
            break;
        case 53068: //Introductions & Greetings
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Introductions & Greetings]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "introductions-greetings");
            break;
        case 53069: //Test Area
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Test Area]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "test-area");
            break;
        case 53070: //Graphic Design – Custom images, logos, banners, etc.
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Graphic Design – Custom images, logos, banners, etc.]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "graphic-design-custom-images-logos-banners-etc");
            break;
        case 53071: //Suggestions
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Suggestions]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "suggestions");
            break;
        case 53072: //The GMLS4 Lounge
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[The GMLS4 Lounge]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "the-gmls4-lounge");
            break;
        case 53073: //Totally Off-Topic
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Totally Off-Topic]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "totally-off-topic");
            break;
        case 53074: //Pics of Your LS4
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Pics of Your LS4]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "pics-of-your-ls4");
            break;
        case 53075: //General Automotive Discussion (Non-LS4 Related)
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[General Automotive Discussion (Non-LS4 Related)]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "general-automotive-discussion");
            break;
        case 53076: //Events & Gatherings
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Events & Gatherings]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "events-gatherings");
            break;
        case 53077: //Racing the LS4
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Racing the LS4]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "racing-the-ls4");
            break;
        case 53078: //Northeast Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Northeast Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "northeast-members");
            break;
        case 53079: //Southeast Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Southeast Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "southeast-members");
            break;
        case 53080: //Midwest Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Midwest Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "midwest-members");
            break;
        case 53081: //South Central Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[South Central Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "south-central-members");
            break;
        case 53082: //Northwest Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Northwest Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "northwest-members");
            break;
        case 53083: //Southwest Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Southwest Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "southwest-members");
            break;
        case 53084: //Canadian Members
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Canadian Members]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "canadian-members");
            break;
        case 53085: //Vendors and Group Purchases
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Vendors and Group Purchases]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "vendors-and-group-purchases");
            break;
        case 53086: //Classifieds: Parts for Sale
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Classifieds: Parts for Sale]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "classifieds-parts-for-sale");
            break;
        case 53087: //Classifieds: Vehicles for Sale
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Classifieds: Vehicles for Sale]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "classifieds-vehicles-for-sale");
            break;
        case 53088: //Classifieds: Want to Buy
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Classifieds: Want to Buy]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "classifieds-want-to-buy");
            break;
        case 53089: //Classifieds: Non-Vehicle Related
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Classifieds: Non-Vehicle Related]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "classifieds-non-vehicle-related");
            break;
        case 53090: //Seller/Vendor Feedback
            $child = $items->channel->item[$i]->addChild('category','<![CDATA[Seller/Vendor Feedback]]>');
            $child->addAttribute("domain", "thread_category");
            $child->addAttribute("nicename", "seller-vendor-feedback");
            break;

    }
}

$new = fopen("newFile.xml", "w"); // open new file
fwrite($new, $items->asXML()); //write XML to new file using asXML method
fclose($new); // close the new file
?>
