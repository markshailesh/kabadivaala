<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Image</th>
                <th class="text-center">Name</th>
                <th class="text-center">Short Desc</th>
                <th class="text-center">Description</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $key=>$service)
                <tr>
                    <td class="text-center">{{ $key + 1 + ($services->currentPage() - 1) * $services->perPage() }}</td>
                    <td class="text-center"><img src="{{ asset('backend/images/service/' . $service->image) }}"
                            onerror="this.onerror=null;this.src='{{ asset('backend/images/no-image.png') }}'"
                            alt="" style="width:100px; height:100px;"></td>
                    <td class="text-center">{{ $service->name }}</td>
                    <td class="text-center">{{ $service->short_desc }}</td>
                    <td class="text-center">{{ $service->description }}</td>
                    <td class="text-center">
                        <x-admin.edit-button route="{{ route('admin.services.edit', $service->id) }}" />
                        <x-admin.delete-button route="{{ route('admin.services.destroy', $service->id) }}"
                            id="{{ $service->id }}" />
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
            <b>Showing {{ ($services->currentpage() - 1) * $services->perpage() + 1 }} to
                {{ ($services->currentpage() - 1) * $services->perpage() + $services->count() }} of
                {{ $services->total() }} Services</b>
        </p>
    </div>
    <div class="col-md-8">
        <div class="float-right">
            {!! $services->links() !!}
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
