@extends('layouts.main')
@section('container')


<article class="mb-5">
    <h2>
        {{ $post->title }}
    </h2> 
    <h5>By : {{ $post->author }}</h5>
    {!! $post->body !!}
</article>

<a href="/posts">Back to Posts</a>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo maxime officia ex eius facilis minus delectus impedit, sit corporis quia rerum commodi. Dignissimos laboriosam voluptatum eveniet, dolorum necessitatibus, officiis cum adipisci laborum aut voluptas consectetur deserunt quod nihil molestias sint autem modi! Consectetur laboriosam quod placeat distinctio, vitae totam eos quos sint sequi, quaerat architecto aspernatur debitis accusantium at voluptatum mollitia cum voluptas.</p><p>Vero minus repellendus sint sit, earum quaerat quisquam eaque repudiandae perferendis id neque dignissimos quasi dolore excepturi! Expedita vel provident magni soluta consectetur quos sequi repellat non officiis ex quia vitae totam, voluptates maxime quisquam excepturi ipsa, impedit quod assumenda dolorem et. Iusto laboriosam alias, quos ipsum rem quasi enim at blanditiis.</p><p>Vero eius animi a omnis dolorum magni quisquam facilis, dolore voluptatibus sequi similique expedita! Quis obcaecati maxime quidem dolorum aperiam maiores in ipsa, libero veniam temporibus voluptatem iusto eum, iure perferendis, corrupti quisquam mollitia autem quae aut non earum quaerat assumenda! Aliquam possimus tempore ad nulla itaque rem eius illo facere voluptatem animi corrupti sit deleniti, assumenda consequatur laborum? Aliquid nulla rerum, consequatur nesciunt beatae quisquam. Ex unde est velit praesentium enim aliquam dicta sunt, ullam debitis, placeat nemo repellat vero animi molestiae optio fugiat aspernatur minus accusamus sequi! Velit sunt accusamus, quidem aliquam ratione, quas voluptates fugiat saepe magni amet eius suscipit nobis tenetur officia, consequuntur nemo odit dolorum! Recusandae distinctio odio quo deleniti perferendis eveniet similique, molestias ducimus ipsum ipsa veniam soluta dolor, repellat quibusdam ex, vitae autem voluptatibus saepe laboriosam non amet.</p>

Post::create([
    'title'=>'Judul Ke Dua',
    'slug'=>'judul-ke-dua',
    'excerpt'=>'Lorem ipsum ke dua',
    'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo maxime officia ex eius facilis minus delectus impedit, sit corporis quia rerum commodi. Dignissimos laboriosam voluptatum eveniet, dolorum necessitatibus, officiis cum adipisci laborum aut voluptas consectetur deserunt quod nihil molestias sint autem modi! Consectetur laboriosam quod placeat distinctio, vitae totam eos quos sint sequi, quaerat architecto aspernatur debitis accusantium at voluptatum mollitia cum voluptas.</p><p>Vero minus repellendus sint sit, earum quaerat quisquam eaque repudiandae perferendis id neque dignissimos quasi dolore excepturi! Expedita vel provident magni soluta consectetur quos sequi repellat non officiis ex quia vitae totam, voluptates maxime quisquam excepturi ipsa, impedit quod assumenda dolorem et. Iusto laboriosam alias, quos ipsum rem quasi enim at blanditiis.</p><p>Vero eius animi a omnis dolorum magni quisquam facilis, dolore voluptatibus sequi similique expedita! Quis obcaecati maxime quidem dolorum aperiam maiores in ipsa, libero veniam temporibus voluptatem iusto eum, iure perferendis, corrupti quisquam mollitia autem quae aut non earum quaerat assumenda! Aliquam possimus tempore ad nulla itaque rem eius illo facere voluptatem animi corrupti sit deleniti, assumenda consequatur laborum? Aliquid nulla rerum, consequatur nesciunt beatae quisquam. Ex unde est velit praesentium enim aliquam dicta sunt, ullam debitis, placeat nemo repellat vero animi molestiae optio fugiat aspernatur minus accusamus sequi! Velit sunt accusamus, quidem aliquam ratione, quas voluptates fugiat saepe magni amet eius suscipit nobis tenetur officia, consequuntur nemo odit dolorum! Recusandae distinctio odio quo deleniti perferendis eveniet similique, molestias ducimus ipsum ipsa veniam soluta dolor, repellat quibusdam ex, vitae autem voluptatibus saepe laboriosam non amet.</p>'
])


@endsection