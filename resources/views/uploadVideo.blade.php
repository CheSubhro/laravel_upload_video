<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
            <title>Upload Video In Laravel</title>
            <!-- Bootstrap CSS CDN -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </head>
            <body>
                <div class="container">
                    <h3 class="text-center">Upload Video In Laravel</h3>
                    <hr>
                    <form method="POST" action="{{ url('/store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="video" class="form-label">Choose Video</label>
                                    <input type="file" class="form-control" name="video">
                                </div>
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div> 
                        </form>
                </div>
                <!-- Bootstrap JS CDN -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </body>
    </html>