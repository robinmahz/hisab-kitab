<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Termwind\Components\Dd;

trait ImageTraits
{
    public function get($path, $name, $request)
    {
        Storage::disk('public')->putFileAs($path, $request->file('profile'), $name);
    }

    public function set($path, $file)
    {
        $name = Str::slug(Carbon::now()) . '.' . $file->getClientOriginalExtension();
        Storage::disk('public')->putFileAs($path, $file, $name);
        return $name;
    }
    public function delete($path, $name)
    {
        Storage::disk('public')->delete($path . '/' . $name);
        return;
    }
}
