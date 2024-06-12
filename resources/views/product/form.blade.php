<x-layout>
    <form action="/product/store" method="POST" enctype="multipart/form-data" class="product-form" style="border: none;">
        @csrf
        <fieldset>
            <center><h1>Add Product</h1></center>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <div class="form-half">
                    <label for="pricing">Price</label>
                    <input type="number" class="form-control" id="pricing" name="pricing" min="1">
                </div>
                <div class="form-half">
                    <label for="promotion">Promotion</label>
                    <input type="number" class="form-control" id="promotion" name="promotion">
                </div>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <a href="{{ route('home') }}" class="btn btn-cancel">Cancel</a>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </fieldset>
    </form>
</x-layout>
<style>
    *{
        border: none
    }
    form{
        border:none;
        border-radius: 10px;
        /* background-color: blueviolet */
    }
    .product-form {
        border: none;
        width: 50vw;
        margin: auto;
    }

    .form-group {
        margin-bottom: 20px;
    }

    /* Define styles for the form labels */
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    /* Define styles for form controls */
    .form-control {
        width: 100%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    /* Define styles for half-width form controls */
    .form-half {
        width: calc(50% - 10px);
        display: inline-block;
        margin-right: 20px;
    }

    /* Define styles for buttons */
    .btn {
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-cancel {
        background-color: gray;
        color: white;
        text-decoration: none;
    }

    .btn-primary {
        background-color: blue;
        color: white;
        text-decoration: none;
    }
    form {
        border: none !important
    }
</style>