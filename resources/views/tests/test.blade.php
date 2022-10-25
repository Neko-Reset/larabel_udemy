test<br>

<!-- データベースの情報の取り出し方 -->
<!-- railsの<% @users.each do |user| %> -->

@foreach ( $values as $value )
    {{ $value->id }}<br>
    {{ $value->text }}<br>
    {{ $value->created_at }}<br>
@endforeach
