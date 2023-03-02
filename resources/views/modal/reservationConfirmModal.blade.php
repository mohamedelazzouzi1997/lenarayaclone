        <!-- Modal -->
        <div class="modal fade" id="emailConfirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title text-white text-lg" id="exampleModalLabel">Reservation Confirme Email
                            message
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="confirmForm" action="{{ route('reservation.confirm', $res->id) }}"
                            class="form-group">
                            @csrf
                            <textarea class="w-full form-control" name="emailMessage" placeholder="Email Message" id="" cols="30"
                                rows="5">Votre demande de réservation a été confirmée. Nous nous réjouissons de vous accueillir prochainement.</textarea>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="py-1 hover:bg-red-600 float-right px-3 bg-red-500 text-white rounded-md"
                            data-dismiss="modal">Close</button>
                        <button form="confirmForm" type="submit"
                            class="py-1 hover:bg-green-600 float-right px-3 bg-green-500 text-white rounded-md">
                            Send Email de confirmation</button>
                    </div>
                </div>
            </div>
        </div>
