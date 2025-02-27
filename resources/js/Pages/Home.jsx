
export default function Home({posts}) {
    return (
        <>
            <h1 className='title'>List</h1>

            <div className="pb-20">
                {posts.map(post => (
                    <div key = {post.id} className="p-4 border-b">
                        <span className="date">Posted on: </span>
                        <span className="date">{new Date(post.created_at).toLocaleTimeString()}</span>
                        <p className="font-medium">{post.body}</p>
                    </div>
                ))}
            </div>
        </>
    );
}
