<?php
$number1 = 1;
$number = 1;

if (!defined('SECURE_ACCESS')) {
    die('DIRECT IS NOT PERMITTED');
}


include('templates/header.php') ?>

<div class="main-content bg-light py-5">
    <div class="container">
        <h1 class="text-center text-primary mb-4">Borrowing</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="/borrowing" method="POST" class="row g-3">
                    <div class="col-md-6">
                        <label for="book_id" class="form-label"><i class="bi bi-book"></i> Pilih Buku</label>
                        <select name="book_id" id="book_id" class="form-select" aria-label="Pilih Buku">
                            <option value="">Pilih Buku</option>
                            <?php foreach ($data as $book) : ?>
                                <option value="<?= $book->getId() ?>"><?= $book->getTitle() ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="user_id" class="form-label"><i class="bi bi-person"></i> Pilih Member</label>
                        <select name="user_id" id="user_id" class="form-select" aria-label="Pilih Member">
                            <option value="">Pilih Member</option>
                            <?php foreach ($data2 as $member) : ?>
                                <option value="<?= $member->getId() ?>"><?= $member->getName() ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="borrow_date" class="form-label"><i class="bi bi-calendar"></i>Borrow Date</label>
                        <input type="date" name="borrow_date" id="borrow_date" class="form-control" value="<?= date('Y-m-d') ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="return_date" class="form-label"><i class="bi bi-calendar-check"></i>Return Date</label>
                        <input type="date" name="return_date" id="return_date" class="form-control">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-lg"><i class="bi bi-check-lg"></i> Borrow</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="my-4">
            <?php if (isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger text-center">
                    <?= $_SESSION['error']; unset($_SESSION['error']); ?>
                </div>
            <?php endif ?>
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="alert alert-success text-center">
                    <?= $_SESSION['success']; unset($_SESSION['success']); ?>
                </div>
            <?php endif ?>
        </div>

        <h5 class="mt-5 text-center">BOOKS BEING BORROWED</h5>
        <div class="table-responsive">
            <table class="table table-hover shadow-sm">
                <thead class="text-center">
                    <tr>
                        <th>NO</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>BORROW AT</th>
                        <th>RETURN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataLoan as $list) : ?>
                        <tr>
                            <td class="text-center"><?= $number++ ?></td>
                            <td><?= $list->getTitle() ?></td>
                            <td><?= $list->getAuthor() ?></td>
                            <td><?= $list->getBorrow() ?></td>
                            <td><?= $list->getReturn() ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center">
            <div class="my-4">
                <a href="/">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>