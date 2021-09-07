<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class BotRequestController extends Controller
{
    protected $bot;

    public function __construct()
    {
        $httpClient = new CurlHTTPClient(env('LINE_BOT_CHANNEL_ACCESS_TOKEN'));
        $this->bot = new LINEBot($httpClient, ['channelSecret' => env('LINE_BOT_CHANNEL_SECRET')]);
    }

    public function handleRequest(Request $request)
    {
        //將以上拿到的資訊寫進log裡，debug用
        Log::info('headers:' . $request);
        Log::info('body:' . json_encode($request->all()));
        $text = $request->events[0]['message']['text'];
        Log::info(['message is : ' => json_encode($text)],);
        $reply = new TextMessageBuilder($text);
        $this->bot->replyMessage($request->events[0]['replyToken'], $reply);
        return Response::HTTP_OK;
    }
}
