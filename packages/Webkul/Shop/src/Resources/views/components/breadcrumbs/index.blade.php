@props([
    'name'  => '',
    'entity' => null,
])

<div class="flex justify-start mt-[5px] mb-[20px] max-lg:hidden testclass">
    <div class="flex gap-x-[14px] items-center">        
        {{ Breadcrumbs::view('shop::partials.breadcrumbs', $name, $entity) }}
    </div>
</div>
