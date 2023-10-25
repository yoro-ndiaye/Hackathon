@props(['status'])

@if ($status)
<<<<<<< HEAD
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
=======
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 dark:text-green-400']) }}>
>>>>>>> a6cc9a3e3fbd9712ff4cb9b0929bacc61496597e
        {{ $status }}
    </div>
@endif
