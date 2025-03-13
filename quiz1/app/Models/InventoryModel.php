<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryModel extends Model

{
    // Define the table name associated with the model
    protected $table = 'inventory';  // The table name is 'inventory'

    // Specify the columns that can be mass-assigned
    protected $fillable = ['name', 'quantity', 'price']; // These are the columns we can fill when adding or updating

    // Add a new inventory item
    public static function addItem($name, $quantity, $price)
    {
        return self::create([
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
        ]);
    }

    // Update an existing inventory item by its ID
    public static function updateItem($id, $name, $quantity, $price)
    {
        $item = self::find($id);  // Find the item by its ID

        if ($item) {
            $item->update([
                'name' => $name,
                'quantity' => $quantity,
                'price' => $price,
            ]);
        }
        return $item;  // Return the updated item, or null if not found
    }

    // Delete an inventory item by its ID
    public static function deleteItem($id)
    {
        $item = self::find($id);  // Find the item by its ID

        if ($item) {
            $item->delete();  // Delete the item
        }
        return $item;  // Return the deleted item, or null if not found
    }
}