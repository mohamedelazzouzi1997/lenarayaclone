<div class="modal fade" id="exportBooking" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-slate-50">
            <div class="modal-header ">
                <h4 class="text-blue-900" id="defaultModalLabel">Export Bookings</h4>
            </div>
            <div class="modal-body">
                <form id="exportform" method="post" action="{{ route('reservation.export') }}" class="form-group"
                    autocomplete="off">
                    @csrf
                    <div class="form-group">
                        <select class=" rounded shadow-md ms form-control" name="file_type" id="">
                            <option value="pdf">PDF</option>
                            <option value="csv">Excel/Csv</option>
                        </select>
                    </div>
                    <div class="form-group ">
                        <select id="exportDate" class=" rounded shadow-md ms form-control" name="date">
                            <option selected value="today">Today</option>
                            <option value="upcoming">Upcoming</option>
                            <option value="range">Date Range</option>
                        </select>
                    </div>
                    <div id="rangeDate" class="form-group shadow border d-none bg-gray-200 p-3">
                        <span class="italic font-extrabold text-blue-900">Start</span>
                        <input class="form-control" type="date" name="start" id="">
                        <span class="italic font-extrabold text-blue-900">End</span>

                        <input class="form-control" type="date" name="end" id="">
                    </div>
                    <div class="form-group">
                        <div class="space-x-2">
                            <input class="rounded text-blue-900" type="checkbox" name="etat[]" value="pending"><label
                                class="italic inline-block" for="">pending</label>
                        </div>
                        <div class="space-x-2">
                            <input class="rounded text-blue-900" type="checkbox" name="etat[]" value="confirmed"><label
                                class="italic inline-block" for="">Confirmed</label>
                        </div>
                        <div class="space-x-2">
                            <input class="rounded text-blue-900" type="checkbox" name="etat[]" value="declined"><label
                                class="italic inline-block" for="">Closed</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="exportform" class="btn btn-primary rounded waves-effect">EXPORT</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
