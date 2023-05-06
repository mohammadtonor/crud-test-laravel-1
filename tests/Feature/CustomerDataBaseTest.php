<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerDataBaseTest extends TestCase
{
    use RefreshDatabase;
    public function test_customer_model_exists(): void
    {
        $customer = Customer::factory()->create();
        $this->assertModelExists($customer);
    }

    public function test_customer_table_has_inserted_record(): void
    {
        $customer = Customer::factory()->create();
        $this->assertDatabaseHas('customers', [
            'email' => $customer->email,
        ]);
    }
}
