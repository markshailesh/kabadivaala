<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Name</th>
                <th class="text-center">Phone</th>
                <th class="text-center">Email</th>
                <th class="text-center">Subject</th>
                <th class="text-center">Message</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $key=>$contact)
                <tr>
                    <td class="text-center">{{ $key + 1 + ($contacts->currentPage() - 1) * $contacts->perPage() }}</td>
                    <td class="text-center">{{ $contact->name }}</td>
                    <td class="text-center">{{ $contact->phone }}</td>
                    <td class="text-center">{{ $contact->email }}</td>
                    <td class="text-center">{{ $contact->subject }}</td>
                    <td class="text-center">{{ $contact->message }}</td>
                    <td class="text-center">
                        <x-admin.delete-button route="{{ route('admin.contact.destroy', $contact->id) }}"
                            id="{{ $contact->id }}" />
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
            <b>Showing {{ ($contacts->currentpage() - 1) * $contacts->perpage() + 1 }} to
                {{ ($contacts->currentpage() - 1) * $contacts->perpage() + $contacts->count() }} of
                {{ $contacts->total() }} contact</b>
        </p>
    </div>
    <div class="col-md-8">
        <div class="float-right">
            {!! $contacts->links() !!}
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
