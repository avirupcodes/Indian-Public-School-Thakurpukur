<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Blog | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')

    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-5xl mx-auto py-10 px-4">
    <div class="bg-white shadow rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6">Create New Blog</h1>

        @if ($errors->any())
            <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Blog Title -->
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Blog Title</label>
                <input type="text" name="title"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       placeholder="Enter blog title" required>
            </div>

            <!-- Blog Image -->
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Blog Featured Image</label>
                <input type="file" name="image"
                       class="w-full border rounded px-3 py-2 bg-white">
            </div>

            <!-- Short Description -->
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Short Description</label>
                <textarea name="short_description" rows="3"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                          placeholder="Short summary of the blog" required></textarea>
            </div>

            <!-- Blog Content -->
            <div class="mb-6">
                <label class="block text-sm font-semibold mb-1">Blog Content</label>
                <textarea id="editor" name="content"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                          placeholder="Write full blog content here..."></textarea>
            </div>

            <!-- SEO Meta Title -->
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-1">Meta Title (SEO)</label>
                <input type="text" name="meta_title"
                       class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                       placeholder="SEO meta title">
            </div>

            <!-- SEO Meta Description -->
            <div class="mb-6">
                <label class="block text-sm font-semibold mb-1">Meta Description (SEO)</label>
                <textarea name="meta_description" rows="3"
                          class="w-full border rounded px-3 py-2 focus:outline-none focus:ring"
                          placeholder="SEO meta description"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex gap-4">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                    Publish Blog
                </button>

                <a href="{{ route('blog.index') }}"
                   class="bg-gray-200 px-6 py-2 rounded hover:bg-gray-300">
                    Cancel
                </a>
            </div>

        </form>
    </div>
</div>

<!-- CKEditor Init -->
<script>
    let editorInstance;

    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            editorInstance = editor;
        })
        .catch(error => {
            console.error(error);
        });

    document.querySelector('form').addEventListener('submit', function () {
        document.querySelector('#editor').value = editorInstance.getData();
    });
</script>

</body>
</html>
