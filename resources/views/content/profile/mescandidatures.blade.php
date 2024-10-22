@extends('content.profile.profile')


@section('profile')




<!-- Content
================================================== -->

<!-- Container -->


@if ($mescandidaturesrecu->count()!=0)
   <div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
       <h3><strong>Mes Candidatures Recues </strong></h3>
     </div>
      <div class="sixteen columns;margin-left:0%">
       <table class="manage-table resumes responsive-table" >
           <tr>
               <th><i class="fa fa-file-text"></i> Titre</th>
               <th><i class="fa fa-file-text"></i> Entreprise</th>
               <th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
               <th><i class="fa fa-calendar"></i> Date</th>


           </tr>

           <!-- Item #1 -->
        @foreach ($mescandidaturesrecu as $candidature)

           <tr>
               <td >
                {{$candidature->annance->titre}}

            </td>
               <td >{{$candidature->annance->entreprise->name}}</td>
                <td>{{$candidature->annance->type_emploi}}</td>
               <td>{{$candidature->created_at}}</td>


           </tr>
   @endforeach
   </table>
</div>
   @endif


   @if ($mescandidaturesrefuse->count()!=0)
   <div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
       <h3><strong>Mes Candidatures Refusees </strong></h3>
     </div>
      <div class="sixteen columns;margin-left:0%">
       <table class="manage-table resumes responsive-table" >
           <tr>
               <th><i class="fa fa-file-text"></i> Titre</th>
               <th><i class="fa fa-file-text"></i> Entreprise</th>
               <th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
               <th><i class="fa fa-calendar"></i> Date</th>


           </tr>

           <!-- Item #1 -->
        @foreach ($mescandidaturesrefuse as $candidature)

           <tr>
               <td >{{$candidature->annance->titre}}</td>
               <td >{{$candidature->annance->entreprise->name}}</td>
                <td>{{$candidature->annance->type_emploi}}</td>
               <td>{{$candidature->created_at}}</td>


           </tr>
   @endforeach
   </table>
</div>
   @endif






   @if ($mescandidaturesaccepte->count()!=0)
   <div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
       <h3><strong>Mes Candidatures Accpete </strong></h3>
     </div>
      <div class="sixteen columns;margin-left:0%">
       <table class="manage-table resumes responsive-table" >
           <tr>
               <th><i class="fa fa-file-text"></i> Titre</th>
               <th><i class="fa fa-file-text"></i> Entreprise</th>
               <th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
               <th><i class="fa fa-calendar"></i> Date</th>


           </tr>

           <!-- Item #1 -->
        @foreach ($mescandidaturesaccepte as $candidature)

           <tr>
               <td >{{$candidature->annance->titre}}</td>
               <td >{{$candidature->annance->entreprise->name}}</td>
                <td>{{$candidature->annance->type_emploi}}</td>
               <td>{{$candidature->created_at}}</td>


           </tr>
   @endforeach
   </table>
</div>
   @endif





   @if ($mescandidaturesenattente->count()!=0)
   <div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
       <h3><strong>Mes Candidatures En attente </strong></h3>
     </div>
      <div class="sixteen columns;margin-left:0%">
       <table class="manage-table resumes responsive-table" >
           <tr>
               <th><i class="fa fa-file-text"></i> Titre</th>
               <th><i class="fa fa-file-text"></i> Entreprise</th>
               <th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
               <th><i class="fa fa-calendar"></i> Date</th>


           </tr>

           <!-- Item #1 -->
        @foreach ($mescandidaturesenattente as $candidature)

           <tr>
               <td >
   <a href="{{route('showemplois',$candidature->annance->slug)}}"
    target="_blank"  style="color: blue; text-decoration: underline;"><i class="fas fa-external-link-alt"></i>
    {{ $candidature->annance->titre }}</a>

               </td>
               <td >{{$candidature->annance->entreprise->name}}</td>
                <td>{{$candidature->annance->type_emploi}}</td>
               <td>{{$candidature->created_at}}</td>


           </tr>
   @endforeach
   </table>
</div>
   @endif


   @if ($mescandidaturesentretien->count()!=0)
<div  style="padding-left: 10px;padding-bottom: 10px; padding-top: 10px; background-color:#EFEFEF" >
    <h3><strong>Mes Candidatures En attente d'entretien</strong></h3>
  </div>
   <div class="sixteen columns;margin-left:0%">
    <table class="manage-table resumes responsive-table" >
        <tr>
            <th><i class="fa fa-file-text"></i> Titre</th>
            <th><i class="fa fa-file-text"></i> Entreprise</th>
            <th><i class="fa fa-map-marker-alt"></i> Type Emploi</th>
            <th><i class="fa fa-calendar"></i> Date</th>


        </tr>

        <!-- Item #1 -->
     @foreach ($mescandidaturesentretien as $candidature)

        <tr>
            <td >{{$candidature->annance->titre}}</td>
            <td >{{$candidature->annance->entreprise->name}}</td>
             <td>{{$candidature->annance->type_emploi}}</td>
            <td>{{$candidature->created_at}}</td>


        </tr>
@endforeach
</table>
   </div>
@endif




@endsection

