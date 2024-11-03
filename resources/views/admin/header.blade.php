<div>
  <div class=" bg- py-2  flex flex-col justify-center  w-full items-center">
    <div>
      <h1>tahaelbal</h1>
    </div>
    <div>
      <form action="{{ url('logout') }}" method="POST">
        {{ csrf_field() }}
        <input id="logout"  type="submit" value="logout">
      </form>
    </div>
    
  </div>
</div>