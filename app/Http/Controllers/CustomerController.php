<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        // Az összes ügyfél listázása
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        // Új ügyfél létrehozása űrlap megjelenítése
        return view('customers.create');
    }

    public function store(Request $request)
    {
        // Új ügyfél létrehozása mentése
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer created successfully.');
    }

    public function show($id)
    {
        // Egy adott ügyfél részleteinek megjelenítése
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        // Egy adott ügyfél szerkesztése űrlap megjelenítése
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        // Egy adott ügyfél frissítése
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers,email,' . $id,
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $customer = Customer::find($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        // Egy adott ügyfél törlése
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}

*/

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        Customer::create($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer added successfully.');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email,' . $id,
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
        ]);

        $customer = Customer::find($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('success', 'Customer updated successfully.');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Customer deleted successfully.');
    }
}
