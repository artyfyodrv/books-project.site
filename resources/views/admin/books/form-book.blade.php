<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Новая книга</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <div class="modal-body">
                <!-- Форма в модальном окне -->
                <form method="POST" action="{{ route('new-book') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputTitle" class="form-label">Название(title)</label>
                        <input type="text" class="form-control" id="title" name="title" aria-label="1">
                    </div>
                    <button type="submit" class="btn btn-primary">Создать</button>
                </form>
            </div>
        </div>
    </div>
</div>
