<?php

namespace App\Services;

use GuzzleHttp\Client;

class InstagramService
{
    protected $client;
    protected $accessToken;

    public function __construct()
    {
        $this->client = new Client();
        $this->accessToken = env('INSTAGRAM_ACCESS_TOKEN');
    }

    public function getRecentPosts($userId, $limit = 10)
    {
        $url = "https://graph.instagram.com/{$userId}/media";
        $params = [
            'query' => [
                'fields' => 'id,caption,media_type,media_url,permalink,thumbnail_url,timestamp,username',
                'access_token' => $this->accessToken,
                'limit' => $limit, // Use the dynamic $limit parameter
            ]
        ];
    
        try {
            $response = $this->client->get($url, $params);
    
            if ($response->getStatusCode() == 200) {
                $data = json_decode($response->getBody(), true);
                return $data['data'];
            }
    
            return [];
        } catch (\Exception $e) {
            // Log or handle the exception
            return [];
        }
    }
    
    public function getUserId()
    {
        try {
            $response = $this->client->get('https://graph.instagram.com/me', [
                'query' => [
                    'fields' => 'id,username',
                    'access_token' => $this->accessToken,
                ],
            ]);
    
            $userData = json_decode($response->getBody(), true);
            return $userData['id'];
        } catch (\Exception $e) {
            // Log or handle the exception
            return null;
        }
    }
    
}
