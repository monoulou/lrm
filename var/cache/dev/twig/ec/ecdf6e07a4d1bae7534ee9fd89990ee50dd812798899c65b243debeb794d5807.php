<?php

/* MALrmBundle:Accueil:index.html.twig */
class __TwigTemplate_40f3eb3f8494005fceb6e440809e56d81ec4d3e438d274daeb57884d2ff8271b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Accueil:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14d3539ad2dc8eab05e4dd26436ac34995acd4474999145e23f0586c7fe16229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d3539ad2dc8eab05e4dd26436ac34995acd4474999145e23f0586c7fe16229->enter($__internal_14d3539ad2dc8eab05e4dd26436ac34995acd4474999145e23f0586c7fe16229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $__internal_02df4d9ce9ab9957fc7eea89f5900ee31f22a4fc26e1aaba903948a25ef5f4d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02df4d9ce9ab9957fc7eea89f5900ee31f22a4fc26e1aaba903948a25ef5f4d5->enter($__internal_02df4d9ce9ab9957fc7eea89f5900ee31f22a4fc26e1aaba903948a25ef5f4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d3539ad2dc8eab05e4dd26436ac34995acd4474999145e23f0586c7fe16229->leave($__internal_14d3539ad2dc8eab05e4dd26436ac34995acd4474999145e23f0586c7fe16229_prof);

        
        $__internal_02df4d9ce9ab9957fc7eea89f5900ee31f22a4fc26e1aaba903948a25ef5f4d5->leave($__internal_02df4d9ce9ab9957fc7eea89f5900ee31f22a4fc26e1aaba903948a25ef5f4d5_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ed8b426d9c9ca01fdd1e932d81f6e9aae33f26d3ca4ff3e4a5e1d898e97d292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed8b426d9c9ca01fdd1e932d81f6e9aae33f26d3ca4ff3e4a5e1d898e97d292->enter($__internal_5ed8b426d9c9ca01fdd1e932d81f6e9aae33f26d3ca4ff3e4a5e1d898e97d292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0c0407231cfe8d90bc1c3a1c5bc8173e16937be44a8a77b160ead005d0cc60e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0407231cfe8d90bc1c3a1c5bc8173e16937be44a8a77b160ead005d0cc60e2->enter($__internal_0c0407231cfe8d90bc1c3a1c5bc8173e16937be44a8a77b160ead005d0cc60e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/index.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
  <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" />
 ";
        
        $__internal_0c0407231cfe8d90bc1c3a1c5bc8173e16937be44a8a77b160ead005d0cc60e2->leave($__internal_0c0407231cfe8d90bc1c3a1c5bc8173e16937be44a8a77b160ead005d0cc60e2_prof);

        
        $__internal_5ed8b426d9c9ca01fdd1e932d81f6e9aae33f26d3ca4ff3e4a5e1d898e97d292->leave($__internal_5ed8b426d9c9ca01fdd1e932d81f6e9aae33f26d3ca4ff3e4a5e1d898e97d292_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4ba5101b5b870fc36f2329bbd1a86c256c5dee356ef357ccf62ed592bb1215cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba5101b5b870fc36f2329bbd1a86c256c5dee356ef357ccf62ed592bb1215cb->enter($__internal_4ba5101b5b870fc36f2329bbd1a86c256c5dee356ef357ccf62ed592bb1215cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0844818eef53c0377e7ea7469702f9f8a8c458d3b5f8180eb682718301894b36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0844818eef53c0377e7ea7469702f9f8a8c458d3b5f8180eb682718301894b36->enter($__internal_0844818eef53c0377e7ea7469702f9f8a8c458d3b5f8180eb682718301894b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo " ";
        // line 10
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/lib/moment.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>

 ";
        // line 14
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fullcalendar/js/fullcalendar/locale/fr.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "\" ></script>
 <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/datepicker.js"), "html", null, true);
        echo "\" ></script>




";
        
        $__internal_0844818eef53c0377e7ea7469702f9f8a8c458d3b5f8180eb682718301894b36->leave($__internal_0844818eef53c0377e7ea7469702f9f8a8c458d3b5f8180eb682718301894b36_prof);

        
        $__internal_4ba5101b5b870fc36f2329bbd1a86c256c5dee356ef357ccf62ed592bb1215cb->leave($__internal_4ba5101b5b870fc36f2329bbd1a86c256c5dee356ef357ccf62ed592bb1215cb_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_df205c355ef003b34f6cfdbdccc72a3b4f16becc55e60674482e0ba631aab1a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df205c355ef003b34f6cfdbdccc72a3b4f16becc55e60674482e0ba631aab1a4->enter($__internal_df205c355ef003b34f6cfdbdccc72a3b4f16becc55e60674482e0ba631aab1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7344546c38ebc6cda29c8b0d3eefc5cea729748b68afc5c813bcfdf9a4e237e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7344546c38ebc6cda29c8b0d3eefc5cea729748b68afc5c813bcfdf9a4e237e1->enter($__internal_7344546c38ebc6cda29c8b0d3eefc5cea729748b68afc5c813bcfdf9a4e237e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  ";
        // line 27
        $this->loadTemplate("connexion.html.twig", "MALrmBundle:Accueil:index.html.twig", 27)->display($context);
        // line 28
        echo "  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  ";
        // line 31
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Accueil:index.html.twig", 31)->display($context);
        // line 32
        echo "  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  ";
        // line 34
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Accueil:index.html.twig", 34)->display($context);
        // line 35
        echo "  <!-- END SIDEBAR-->



  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    ";
        // line 44
        if ( !twig_test_empty((isset($context["clientAfacturer"]) ? $context["clientAfacturer"] : $this->getContext($context, "clientAfacturer")))) {
            // line 45
            echo "    ";
            $context["i"] = 0;
            // line 46
            echo "     <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
       <h3 class=\"panel-title\">Clients à facturer</h3>
      </div>
      <table class=\"table\">
       <thead>
       <tr>
        <th>#</th>
        <th>Client</th>
        <th>Candidat</th>
        <th>Utilisateur</th>

       </tr>
       </thead>
       ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientAfacturer"]) ? $context["clientAfacturer"] : $this->getContext($context, "clientAfacturer")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 61
                echo "         <tbody>
         <tr>
          ";
                // line 63
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 64
                echo "          <td>";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                echo "</td>
          <td><a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_edit", array("id" => $this->getAttribute($context["client"], 4, array(), "array"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], 1, array(), "array"), "html", null, true);
                echo "</a></td>
          <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], 2, array(), "array"), "html", null, true);
                echo "</td>
          <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], 3, array(), "array"), "html", null, true);
                echo "</td>
         </tr>
         </tbody>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "      </table>
     </div>
     ";
        } else {
            // line 74
            echo "      <div class=\"col-lg-12\" id=\"facturer\">
       <p>AUCUN CLIENT A FACTURER AUJOURD'HUI.</p>
      </div>
     ";
        }
        // line 78
        echo "   </div>

   <div class=\"row\">
    <div class=\"col-lg-3\">
     <!-- BEGIN FORM-->
     ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_start', array("class" => "horizontal-form"));
        echo "
      <div class=\"form-group\" style=\"margin-left: 100px; margin-bottom: -50px\">
       <label class=\"control-label\"></label>
       ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "chargeRecrutement", array()), 'errors');
        echo "
       ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), "chargeRecrutement", array()), 'widget');
        echo "
      </div>
     ";
        // line 89
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["userForm"]) ? $context["userForm"] : $this->getContext($context, "userForm")), 'form_end');
        echo "
     <!-- END FORM-->
    </div>
   </div>

   <div class=\"row\">
    <div class=\"col-lg-offset-7\">
     <button style=\"margin-bottom: -47px; margin-left: 100px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal create event -->
   <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
       <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un evenement</h4>
      </div>
      <div class=\"modal-body\">

       <!-- BEGIN FORM-->
       ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "horizontal-form"));
        echo "
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Début:</label>
          ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'errors');
        echo "
          ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startDate", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Fin:</label>
          ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'errors');
        echo "
          ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endDate", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Commentaires:</label>
          ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'errors');
        echo "
          ";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "commentaire", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Toute la journée:</label>
          ";
        // line 152
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allDay", array()), 'errors');
        echo "
          ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allDay", array()), 'widget');
        echo "
         </div>
        </div>
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Priorité:</label>
          ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundColor", array()), 'errors');
        echo "
          ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundColor", array()), 'widget');
        echo "
         </div>
        </div>
       </div>

       <div class=\"row\">
        <div class=\"col-lg-12\">
         <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Enregistrer</button>
        </div>
       </div>
       ";
        // line 170
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
       <!-- END FORM-->

      </div>
     </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- Modal Details evenement-->
   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Détails de l'événement</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
       <div id=\"modalComm\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"editButton\">Editer</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Supprimer</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal Details evenement-->

   <!-- Modal Edit -->
   <div id=\"editModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Editer</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       ";
        // line 213
        echo "       <!-- BEGIN EDITFORM-->
       ";
        // line 214
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_start', array("class" => "horizontal-form"));
        echo "
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "title", array()), 'errors');
        echo "
          ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "title", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Commentaires:</label>
          ";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "commentaire", array()), 'errors');
        echo "
          ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), "commentaire", array()), 'widget');
        echo "
         </div>
        </div>
       </div>
       ";
        // line 233
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["editForm"]) ? $context["editForm"] : $this->getContext($context, "editForm")), 'form_end');
        echo "
       <!-- BEGIN EDITFORM-->
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"saveButton\">Envoyer</button>
      </div>
     </div>
    </div>
   </div>
   <!-- Modal Edit -->

   <div class=\"row\" id=\"calendar\">
        ";
        // line 247
        $this->loadTemplate("@FullCalendar/Calendar/calendar.html.twig", "MALrmBundle:Accueil:index.html.twig", 247)->display($context);
        // line 248
        echo "   </div>

  <footer id=\"foot\"></footer>

  </div>

 </div>

 </div>
";
        
        $__internal_7344546c38ebc6cda29c8b0d3eefc5cea729748b68afc5c813bcfdf9a4e237e1->leave($__internal_7344546c38ebc6cda29c8b0d3eefc5cea729748b68afc5c813bcfdf9a4e237e1_prof);

        
        $__internal_df205c355ef003b34f6cfdbdccc72a3b4f16becc55e60674482e0ba631aab1a4->leave($__internal_df205c355ef003b34f6cfdbdccc72a3b4f16becc55e60674482e0ba631aab1a4_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 248,  464 => 247,  447 => 233,  440 => 229,  436 => 228,  425 => 220,  421 => 219,  413 => 214,  410 => 213,  366 => 170,  353 => 160,  349 => 159,  340 => 153,  336 => 152,  325 => 144,  321 => 143,  310 => 135,  306 => 134,  295 => 126,  291 => 125,  280 => 117,  276 => 116,  268 => 111,  243 => 89,  238 => 87,  234 => 86,  228 => 83,  221 => 78,  215 => 74,  210 => 71,  200 => 67,  196 => 66,  190 => 65,  185 => 64,  183 => 63,  179 => 61,  175 => 60,  159 => 46,  156 => 45,  154 => 44,  143 => 35,  141 => 34,  137 => 32,  135 => 31,  130 => 28,  128 => 27,  123 => 24,  114 => 23,  98 => 16,  94 => 15,  89 => 14,  84 => 11,  79 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

 {% block stylesheets %}
  <link href=\"{{ asset ('css/index.css') }}\" rel='stylesheet' type='text/css' />
  <link href=\"{{ asset('bundles/fullcalendar/css/fullcalendar/fullcalendar.min.css') }}\"  rel=\"stylesheet\" />
 {% endblock %}

{% block javascripts %}
 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/jquery.min.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/lib/moment.min.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.min.js') }}\"></script>

 {#<script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/fullcalendar.default-settings.js') }}\"></script>#}
 <script type=\"text/javascript\" src=\"{{ asset('bundles/fullcalendar/js/fullcalendar/locale/fr.js') }}\"></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/calendar.js') }}\" ></script>
 <script type=\"text/javascript\" src=\"{{ asset('js/datepicker.js') }}\" ></script>




{% endblock %}

{% block body %}

 <div class=\"container-fluid\" id=\"header_container\">
  <!-- START CONNECT BAR-->
  {% include 'connexion.html.twig' %}
  <!-- END CONNECT BAR -->
 <div class=\"container-fluid\" id=\"main_container\">
  <!-- START TOP NAVBAR-->
  {% include 'navbar.html.twig' %}
  <!-- END TOP NAVBAR -->
  <!-- START SIDEBAR-->
  {% include 'sidebar.html.twig' %}
  <!-- END SIDEBAR-->



  <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
   <div class=\"row\">
    <h3>TABLEAU DE BORD</h3><hr style=\"border: 1px solid darkgray;\">
   </div>
   <div class=\"row\">
    {% if clientAfacturer is not empty %}
    {% set i = 0 %}
     <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
       <h3 class=\"panel-title\">Clients à facturer</h3>
      </div>
      <table class=\"table\">
       <thead>
       <tr>
        <th>#</th>
        <th>Client</th>
        <th>Candidat</th>
        <th>Utilisateur</th>

       </tr>
       </thead>
       {% for client in clientAfacturer %}
         <tbody>
         <tr>
          {% set i = i + 1 %}
          <td>{{ i }}</td>
          <td><a href=\"{{ path ('ma_lrm_client_edit', { 'id': client[4] }) }}\">{{ client[1] }}</a></td>
          <td>{{ client[2] }}</td>
          <td>{{ client[3] }}</td>
         </tr>
         </tbody>
       {% endfor %}
      </table>
     </div>
     {% else %}
      <div class=\"col-lg-12\" id=\"facturer\">
       <p>AUCUN CLIENT A FACTURER AUJOURD'HUI.</p>
      </div>
     {% endif %}
   </div>

   <div class=\"row\">
    <div class=\"col-lg-3\">
     <!-- BEGIN FORM-->
     {{ form_start(userForm, {'class': 'horizontal-form'}) }}
      <div class=\"form-group\" style=\"margin-left: 100px; margin-bottom: -50px\">
       <label class=\"control-label\"></label>
       {{ form_errors(userForm.chargeRecrutement)}}
       {{ form_widget(userForm.chargeRecrutement) }}
      </div>
     {{ form_end(userForm) }}
     <!-- END FORM-->
    </div>
   </div>

   <div class=\"row\">
    <div class=\"col-lg-offset-7\">
     <button style=\"margin-bottom: -47px; margin-left: 100px\" class=\"btn  btn-default\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Nouvel evenement</button>
    </div>
   </div>

   <!-- Modal create event -->
   <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
       <h4 class=\"modal-title\" id=\"myModalLabel\">Ajouter un evenement</h4>
      </div>
      <div class=\"modal-body\">

       <!-- BEGIN FORM-->
       {{ form_start(form, {'class': 'horizontal-form'}) }}
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          {{ form_errors(form.title)}}
          {{ form_widget(form.title) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Début:</label>
          {{ form_errors(form.startDate)}}
          {{ form_widget(form.startDate) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Fin:</label>
          {{ form_errors(form.endDate)}}
          {{ form_widget(form.endDate) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Commentaires:</label>
          {{ form_errors(form.commentaire)}}
          {{ form_widget(form.commentaire) }}
         </div>
        </div>
       </div>
       <div class=\"row\">
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Toute la journée:</label>
          {{ form_errors(form.allDay)}}
          {{ form_widget(form.allDay) }}
         </div>
        </div>
        <div class=\"col-lg-6\">
         <div class=\"form-group\">
          <label class=\"control-label\">Priorité:</label>
          {{ form_errors(form.backgroundColor)}}
          {{ form_widget(form.backgroundColor) }}
         </div>
        </div>
       </div>

       <div class=\"row\">
        <div class=\"col-lg-12\">
         <button type=\"submit\" style=\"width: 100%\" class=\"btn  btn-default\"><i class=\"fa fa-check\" style=\"width: 100%\"></i>Enregistrer</button>
        </div>
       </div>
       {{ form_end(form) }}
       <!-- END FORM-->

      </div>
     </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->

   <!-- Modal Details evenement-->
   <div id=\"calendarModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Détails de l'événement</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       <h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>
       <div id=\"modalComm\" style=\"margin-top:5px;\"></div>
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\" id=\"editButton\">Editer</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteButton\">Supprimer</button>
      </div>
     </div>
    </div>
   </div>
   <!--Modal Details evenement-->

   <!-- Modal Edit -->
   <div id=\"editModal\" class=\"modal fade\">
    <div class=\"modal-dialog\">
     <div class=\"modal-content\">
      <div class=\"modal-header\">
       <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
       <h4 class=\"modal-title\">Editer</h4>
      </div>
      <div id=\"modalBody\" class=\"modal-body\">
       {#<h4 id=\"modalTitle\" class=\"modal-title\"></h4>
       <div id=\"modalWhen\" style=\"margin-top:5px;\"></div>#}
       <!-- BEGIN EDITFORM-->
       {{ form_start(editForm, {'class': 'horizontal-form'}) }}
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Titre:</label>
          {{ form_errors(editForm.title)}}
          {{ form_widget(editForm.title) }}
         </div>
        </div>
       </div>
       <div class=\"row\" >
        <div class=\"col-lg-12\">
         <div class=\"form-group\">
          <label class=\"control-label\">Commentaires:</label>
          {{ form_errors(editForm.commentaire)}}
          {{ form_widget(editForm.commentaire) }}
         </div>
        </div>
       </div>
       {{ form_end(editForm) }}
       <!-- BEGIN EDITFORM-->
      </div>
      <input type=\"hidden\" id=\"eventID\"/>
      <div class=\"modal-footer\">
       <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Annuler</button>
       <button type=\"submit\" class=\"btn btn-danger\" id=\"saveButton\">Envoyer</button>
      </div>
     </div>
    </div>
   </div>
   <!-- Modal Edit -->

   <div class=\"row\" id=\"calendar\">
        {% include '@FullCalendar/Calendar/calendar.html.twig' %}
   </div>

  <footer id=\"foot\"></footer>

  </div>

 </div>

 </div>
{% endblock %}", "MALrmBundle:Accueil:index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Accueil/index.html.twig");
    }
}
