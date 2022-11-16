<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Messaging\V1\Service;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Serialize;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class UsAppToPersonTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->usAppToPerson->create("BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "description", ["message_samples"], "us_app_to_person_usecase", True, True);
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = [
            'BrandRegistrationSid' => "BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX",
            'Description' => "description",
            'MessageSamples' => Serialize::map(["message_samples"], function($e) { return $e; }),
            'UsAppToPersonUsecase' => "us_app_to_person_usecase",
            'HasEmbeddedLinks' => Serialize::booleanToString(True),
            'HasEmbeddedPhone' => Serialize::booleanToString(True),
        ];

        $this->assertRequest(new Request(
            'post',
            'https://messaging.twilio.com/v1/Services/MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Compliance/Usa2p',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "QE2c6890da8086d771620e9b13fadeba0b",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "brand_registration_sid": "BNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "description": "Send marketing messages about sales to opted in customers.",
                "message_samples": [
                    "EXPRESS: Denim Days Event is ON",
                    "LAST CHANCE: Book your next flight for just 1 (ONE) EUR"
                ],
                "us_app_to_person_usecase": "MARKETING",
                "has_embedded_links": true,
                "has_embedded_phone": false,
                "campaign_status": "PENDING",
                "campaign_id": "CXaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_externally_registered": false,
                "rate_limits": {
                    "att": {
                        "mps": 600,
                        "msg_class": "A"
                    },
                    "tmobile": {
                        "brand_tier": "TOP"
                    }
                },
                "message_flow": "End users opt-in by visiting www.example.com and adding their phone number. They then check a box agreeing to receive text messages from Example Brand. Additionally, end users can also opt-in by texting START to (111) 222-3333 to opt in.",
                "opt_in_message": "Acme Corporation: You are now opted-in. For help, reply HELP. To opt-out, reply STOP",
                "opt_out_message": "You have successfully been unsubscribed from Acme Corporation. You will not receive any more messages from this number.",
                "help_message": "Acme Corporation: Please visit www.example.com to get support. To opt-out, reply STOP.",
                "opt_in_keywords": [
                    "START"
                ],
                "opt_out_keywords": [
                    "STOP"
                ],
                "help_keywords": [
                    "HELP"
                ],
                "date_created": "2021-02-18T14:48:52Z",
                "date_updated": "2021-02-18T14:48:52Z",
                "url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p/QE2c6890da8086d771620e9b13fadeba0b",
                "mock": false
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->usAppToPerson->create("BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "description", ["message_samples"], "us_app_to_person_usecase", True, True);

        $this->assertNotNull($actual);
    }

    public function testCreateWithDefaultsResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "QE2c6890da8086d771620e9b13fadeba0b",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "brand_registration_sid": "BNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "description": "Send marketing messages about sales to opted in customers.",
                "message_samples": [
                    "EXPRESS: Denim Days Event is ON",
                    "LAST CHANCE: Book your next flight for just 1 (ONE) EUR"
                ],
                "us_app_to_person_usecase": "MARKETING",
                "has_embedded_links": true,
                "has_embedded_phone": false,
                "campaign_status": "PENDING",
                "campaign_id": "CXaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_externally_registered": false,
                "rate_limits": {
                    "att": {
                        "mps": 600,
                        "msg_class": "A"
                    },
                    "tmobile": {
                        "brand_tier": "TOP"
                    }
                },
                "message_flow": "End users opt-in by visiting www.example.com and adding their phone number. They then check a box agreeing to receive text messages from Example Brand. Additionally, end users can also opt-in by texting START to (111) 222-3333 to opt in.",
                "opt_in_message": "Acme Corporation: You are now opted-in. For help, reply HELP. To opt-out, reply STOP",
                "opt_out_message": "You have successfully been unsubscribed. You will not receive any more messages from this number. Reply START to resubscribe.",
                "help_message": "Reply STOP to unsubscribe. Msg&Data Rates May Apply.",
                "opt_in_keywords": [
                    "START"
                ],
                "opt_out_keywords": [
                    "STOP",
                    "STOPALL",
                    "UNSUBSCRIBE",
                    "CANCEL",
                    "END",
                    "QUIT"
                ],
                "help_keywords": [
                    "HELP",
                    "INFO"
                ],
                "date_created": "2021-02-18T14:48:52Z",
                "date_updated": "2021-02-18T14:48:52Z",
                "url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p/QE2c6890da8086d771620e9b13fadeba0b",
                "mock": false
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->usAppToPerson->create("BNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", "description", ["message_samples"], "us_app_to_person_usecase", True, True);

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->usAppToPerson("QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://messaging.twilio.com/v1/Services/MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Compliance/Usa2p/QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->usAppToPerson("QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->usAppToPerson->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/Services/MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Compliance/Usa2p'
        ));
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "compliance": [
                    {
                        "sid": "QE2c6890da8086d771620e9b13fadeba0b",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "brand_registration_sid": "BNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "description": "Send marketing messages about sales to opted in customers.",
                        "message_samples": [
                            "EXPRESS: Denim Days Event is ON",
                            "LAST CHANCE: Book your next flight for just 1 (ONE) EUR"
                        ],
                        "us_app_to_person_usecase": "MARKETING",
                        "has_embedded_links": true,
                        "has_embedded_phone": false,
                        "campaign_status": "PENDING",
                        "campaign_id": "CXaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "is_externally_registered": false,
                        "rate_limits": {
                            "att": {
                                "mps": 600,
                                "msg_class": "A"
                            },
                            "tmobile": {
                                "brand_tier": "TOP"
                            }
                        },
                        "message_flow": "End users opt-in by visiting www.example.com and adding their phone number. They then check a box agreeing to receive text messages from Example Brand. Additionally, end users can also opt-in by texting START to (111) 222-3333 to opt in.",
                        "opt_in_message": "Acme Corporation: You are now opted-in. For help, reply HELP. To opt-out, reply STOP",
                        "opt_out_message": "You have successfully been unsubscribed from Acme Corporation. You will not receive any more messages from this number.",
                        "help_message": "Acme Corporation: Please visit www.example.com to get support. To opt-out, reply STOP.",
                        "opt_in_keywords": [
                            "START"
                        ],
                        "opt_out_keywords": [
                            "STOP"
                        ],
                        "help_keywords": [
                            "HELP"
                        ],
                        "date_created": "2021-02-18T14:48:52Z",
                        "date_updated": "2021-02-18T14:48:52Z",
                        "url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p/QE2c6890da8086d771620e9b13fadeba0b",
                        "mock": false
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "next_page_url": null,
                    "url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p?PageSize=50&Page=0",
                    "key": "compliance"
                }
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->usAppToPerson->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                        ->usAppToPerson("QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://messaging.twilio.com/v1/Services/MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/Compliance/Usa2p/QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "QE2c6890da8086d771620e9b13fadeba0b",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "brand_registration_sid": "BNaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "messaging_service_sid": "MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "description": "Send marketing messages about sales to opted in customers.",
                "message_samples": [
                    "EXPRESS: Denim Days Event is ON",
                    "LAST CHANCE: Book your next flight for just 1 (ONE) EUR"
                ],
                "us_app_to_person_usecase": "MARKETING",
                "has_embedded_links": true,
                "has_embedded_phone": false,
                "campaign_status": "PENDING",
                "campaign_id": "CXaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "is_externally_registered": false,
                "rate_limits": {
                    "att": {
                        "mps": 600,
                        "msg_class": "A"
                    },
                    "tmobile": {
                        "brand_tier": "TOP"
                    }
                },
                "message_flow": "End users opt-in by visiting www.example.com and adding their phone number. They then check a box agreeing to receive text messages from Example Brand. Additionally, end users can also opt-in by texting START to (111) 222-3333 to opt in.",
                "opt_in_message": "Acme Corporation: You are now opted-in. For help, reply HELP. To opt-out, reply STOP",
                "opt_out_message": "You have successfully been unsubscribed from Acme Corporation. You will not receive any more messages from this number.",
                "help_message": "Acme Corporation: Please visit www.example.com to get support. To opt-out, reply STOP.",
                "opt_in_keywords": [
                    "START"
                ],
                "opt_out_keywords": [
                    "STOP"
                ],
                "help_keywords": [
                    "HELP"
                ],
                "date_created": "2021-02-18T14:48:52Z",
                "date_updated": "2021-02-18T14:48:52Z",
                "url": "https://messaging.twilio.com/v1/Services/MGaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/Compliance/Usa2p/QE2c6890da8086d771620e9b13fadeba0b",
                "mock": false
            }
            '
        ));

        $actual = $this->twilio->messaging->v1->services("MGXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                              ->usAppToPerson("QEXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }
}