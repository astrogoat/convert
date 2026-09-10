@php
    use Astrogoat\ConvertExperience\Settings\ConvertExperienceSettings;
    $settings = resolve(ConvertExperienceSettings::class);
@endphp

@if($settings->enabled)
<!-- begin Convert Experiences code-->
    <script type="text/javascript" src="{{ $settings->url }}"></script>
<!-- end Convert Experiences code -->
@endif
