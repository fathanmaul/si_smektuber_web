
@if (session()->has("flash"))
<div @class([
    'p-4 mb-4 text-sm rounded-lg', 
    'text-red-800 bg-red-50' => session('flash')['type'] == "danger", 
    'text-yellow-800 bg-yellow-50' =>session('flash')['type'] == "warning",
    'text-green-800 bg-green-50' => session('flash')['type'] == "success"])>
    <span class="text-medium">{{ session('flash')['message'] ?? '' }}</span> 
</div>
@endif