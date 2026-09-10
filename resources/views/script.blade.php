@php
    use Astrogoat\Convert\Settings\ConvertSettings;
    $settings = resolve(ConvertSettings::class);
@endphp

@if($settings->enabled)
<!-- begin Convert code-->
    <script type="text/javascript" src="{{ $settings->url }}"></script>
<!-- end Convert code -->
@endif
