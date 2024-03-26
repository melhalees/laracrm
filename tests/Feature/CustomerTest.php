<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Customer;

class CustomerTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_customer()
    {
        $this->post('/customers', [
            'name' => 'Mohamed Elhalees',
            'email' => 'contact@melhalees.com',
            'phone' => '+966532006175',
        ]);

        $this->assertDatabaseHas('customers', ['name' => 'Mohamed Elhalees']);
    }

    public function test_can_show_customer()
    {
        $customer = Customer::factory()->create();

        $response = $this->get("/customers/{$customer->id}");

        $response->assertStatus(200);
    }

    public function test_can_update_customer()
    {
        $customer = Customer::factory()->create();

        $this->put("/customers/{$customer->id}", [
            'name' => 'Mohamed Elhalees',
            'email' => 'hello@melhalees.com',
            'phone' => '00966532006175',
        ]);

        $this->assertDatabaseHas('customers', ['name' => 'Mohamed Elhalees']);
    }

    public function test_can_delete_customer()
    {
        $customer = Customer::factory()->create();

        $response = $this->delete("/customers/{$customer->id}");

        $this->assertDatabaseMissing('customers', ['id' => $customer->id]);
        $response->assertRedirect('/customers');
    }
}
