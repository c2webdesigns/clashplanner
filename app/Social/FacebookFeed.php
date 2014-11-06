<?php namespace app\Social;

use Facebook\FacebookRequest;
use Facebook\FacebookSession;

/**
 * Class FacebookFeed
 * @package App
 */
class FacebookFeed {

    /**
     * @var
     */
    public $feed;

    /**
     * @param $group_id
     */
    public function feed($group_id)
    {
        $feed_object = $this->graphRequest($this->createSession(), $group_id);

        $this->feed = $this->convertFeedObject($feed_object);
    }

    /**
     * @return FacebookSession
     */
    private function createSession()
    {
        FacebookSession::setDefaultApplication(getenv('FACEBOOK_CLIENT_ID'), getenv('FACEBOOK_CLIENT_SECRET'));

        // If you already have a valid access token:
        return new FacebookSession(getenv('FACEBOOK_ACCESS_TOKEN'));
    }

    /**
     * @param $session
     * @param $group_id
     * @return string
     * @throws \Facebook\FacebookRequestException
     */
    private function graphRequest($session, $group_id)
    {
        $request = new FacebookRequest(
            $session,
            'GET',
            '/' . $group_id . '/feed'
        );

        $response = $request->execute();
        return $response->getGraphObject();

    }

    /**
     * @param $feed_object
     * @return mixed
     */
    private function convertFeedObject($feed_object)
    {
        $x = $feed_object->getProperty('data');
        return $x->asArray();
    }

}