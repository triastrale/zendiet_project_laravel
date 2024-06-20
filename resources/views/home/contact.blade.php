<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<section class="contact" id="contact">
    <h1 class="heading">Subscribe <span> Us </span></h1>

    <div class="row">
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name" class="formulir" required />
            <input type="email" name="email" placeholder="Email" class="formulir" required />
            <textarea name="message" class="formulir" placeholder="Request for Article" cols="30" rows="10" required></textarea>
            <input type="submit" value="Send Request" class="btn" />
        </form>

        <div class="image">
            <img src="images/contacts.jpg" alt="" />
        </div>
    </div>
</section>

<script>
    function showAlert() {
        Swal.fire({
            title: 'Success!',
            text: 'Request Send Success!',
            icon: 'success'
        });
    }
</script>