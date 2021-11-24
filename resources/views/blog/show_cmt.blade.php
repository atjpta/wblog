
@forelse ($post->cmt as $cmts)
    <p>{{ $cmts->description}} Created on {{ date('jS M Y', strtotime($cmts->updated_at)) }}
    </p>
    @empty
        <p>không có nhận xét nào cả</p>
    @endforelse