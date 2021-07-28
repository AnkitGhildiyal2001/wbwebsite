<div class="content">
    <div class="title">Something went wrong.</div>

    @if(app()->bound('sentry') && app('sentry')->getLastEventId())
        <div class="subtitle">Error ID: {{ app('sentry')->getLastEventId() }}</div>
        <script src="https://browser.sentry-cdn.com/5.19.1/bundle.min.js" integrity="sha384-ibWewy8LWP0FdvEBD3iLjNmbFkkh/FKtOz8GR9C8ZBWjDTbjbdIDpa4nc/AasWns" crossorigin="anonymous"></script>
        <script>
            Sentry.init({ dsn: 'https://8b41bf27a36546c5a67edfc2669257ca@o418304.ingest.sentry.io/5320689' });
            Sentry.showReportDialog({ eventId: '{{ app('sentry')->getLastEventId() }}' });
        </script>
    @endif
</div>