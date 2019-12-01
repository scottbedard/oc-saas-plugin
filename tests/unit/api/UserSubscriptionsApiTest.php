<?php

namespace Bedard\Saas\Tests\Unit\Classes;

use Bedard\Saas\Tests\PluginTestCase;
use StripeManager;

class UserSubscriptionsApiTest extends PluginTestCase
{
    public function test_fetching_a_users_subscriptions()
    {
        // create a user and subscribe them to a plan
        $user = $this->createAuthenticatedUser();
        $product = StripeManager::createProduct(['name' => 'Basic']);
        $plan = StripeManager::createPlan([
            'active'   => true,
            'amount'   => 0,
            'currency' => 'usd',
            'interval' => 'month',
            'product'  => $product->id,
        ]);

        StripeManager::subscribeUserToPlan($user, $plan->id);

        $response = $this->get('/api/bedard/saas/user/subscriptions');
        $response->assertStatus(200);

        $data = json_decode($response->getContent(), true);
        $this->assertEquals($plan->id, $data['data'][0]['plan']['id']);
        $this->assertEquals(1, count($data['data']));
        $this->assertFalse($data['has_more']);
    }
}