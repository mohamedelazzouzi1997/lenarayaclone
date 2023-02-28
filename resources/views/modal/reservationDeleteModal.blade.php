        <!-- Modal -->
        <div class="modal fade" id="emailDeletemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-red-500">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Reservation Delete Email
                            message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="deleteform" method="post" action="{{ route('reservation.delete', $res->id) }}"
                            class="form-group">
                            @csrf
                            <textarea class="w-full form-control" name="emailMessage" placeholder="Email Message" id="" cols="30"
                                rows="5"></textarea>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="py-1 hover:bg-red-600 float-right px-3 bg-red-500 text-white rounded-md"
                            data-dismiss="modal">Close</button>
                        <button form="deleteform" type="submit"
                            class="py-1 hover:bg-yellow-600 float-right px-3 bg-yellow-500 text-white rounded-md">
                            email de rejection and delete </button>
                    </div>
                </div>
            </div>
        </div>
