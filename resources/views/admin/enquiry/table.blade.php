<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Email</th>
                <th class="text-center">Scrap Type</th>
                <th class="text-center">Pickup Date</th>
                <th class="text-center">Pickup Time</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($enquirys as $key=>$enquiry)
                <tr>
                    <td class="text-center">{{ $key + 1 + ($enquirys->currentPage() - 1) * $enquirys->perPage() }}</td>
                    <td class="text-center">{{ $enquiry->name }}</td>
                    <td class="text-center">{{ $enquiry->phone }}</td>
                    <td class="text-center">{{ $enquiry->email }}</td>
                    <td class="text-center">{{ $enquiry->scrap_type }}</td>
                    <td class="text-center">{{ $enquiry->pickup_date }}</td>
                    <td class="text-center">{{ $enquiry->pickup_time }}</td>
                    <td class="text-center">
                        <x-admin.delete-button route="{{ route('admin.enquiry.destroy', $enquiry->id) }}"
                            id="{{ $enquiry->id }}" />
                    </td>
                </tr>
            @empty
                <x-admin.empty-table />
            @endforelse
        </tbody>
    </table>
</div>
<hr>
<div class="row">
    <div class="col-md-4">
        <p>
            <b>Showing {{ ($enquirys->currentpage() - 1) * $enquirys->perpage() + 1 }} to
                {{ ($enquirys->currentpage() - 1) * $enquirys->perpage() + $enquirys->count() }} of
                {{ $enquirys->total() }} Enquiry</b>
        </p>
    </div>
    <div class="col-md-8">
        <div class="float-right">
            {!! $enquirys->links() !!}
        </div>
    </div>
</div>
<script>
    $(function() {
        $('a.page-link').on('click', function(event) {
            $('tbody').addClass('loading')
            event.preventDefault()
            var url = $(this).attr('href');
            $.ajax({
                type: 'GET',
                url: url,
                success: function(data) {
                    window.history.pushState("", "", url);
                    $('tbody').removeClass('loading');
                    $('#table_div').html(data);
                    $('[data-toggle="tooltip"]').tooltip();
                }
            });
        });
    });
</script>
