<?php

/* MALrmBundle:Gestion:show.html.twig */
class __TwigTemplate_496a1f3f34b03559194b2278baf7a7786438598a77d174547479a44f637f6073 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:show.html.twig", 1);
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
        $__internal_d70dd1f404c4a1a65bdce403f2b8aabcdeeb2bf4789fdf99280baeff077557e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70dd1f404c4a1a65bdce403f2b8aabcdeeb2bf4789fdf99280baeff077557e4->enter($__internal_d70dd1f404c4a1a65bdce403f2b8aabcdeeb2bf4789fdf99280baeff077557e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $__internal_2f398851677e8a25d3e7c048133125ac55f294e3e9221975ee77c174241a597c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f398851677e8a25d3e7c048133125ac55f294e3e9221975ee77c174241a597c->enter($__internal_2f398851677e8a25d3e7c048133125ac55f294e3e9221975ee77c174241a597c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d70dd1f404c4a1a65bdce403f2b8aabcdeeb2bf4789fdf99280baeff077557e4->leave($__internal_d70dd1f404c4a1a65bdce403f2b8aabcdeeb2bf4789fdf99280baeff077557e4_prof);

        
        $__internal_2f398851677e8a25d3e7c048133125ac55f294e3e9221975ee77c174241a597c->leave($__internal_2f398851677e8a25d3e7c048133125ac55f294e3e9221975ee77c174241a597c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d0384288db3384817cbe042d93c945d05fa772b3dfb6dc29e692c41b5916239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d0384288db3384817cbe042d93c945d05fa772b3dfb6dc29e692c41b5916239->enter($__internal_9d0384288db3384817cbe042d93c945d05fa772b3dfb6dc29e692c41b5916239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_080615783549cace16ba274bcbfad52e61f7dd7bf8f878f37de2af87c3197c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080615783549cace16ba274bcbfad52e61f7dd7bf8f878f37de2af87c3197c3d->enter($__internal_080615783549cace16ba274bcbfad52e61f7dd7bf8f878f37de2af87c3197c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_080615783549cace16ba274bcbfad52e61f7dd7bf8f878f37de2af87c3197c3d->leave($__internal_080615783549cace16ba274bcbfad52e61f7dd7bf8f878f37de2af87c3197c3d_prof);

        
        $__internal_9d0384288db3384817cbe042d93c945d05fa772b3dfb6dc29e692c41b5916239->leave($__internal_9d0384288db3384817cbe042d93c945d05fa772b3dfb6dc29e692c41b5916239_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19608cefdc9a37cbf1feac02b4438d8b36982d3bcb836c376b62592eaa3cc173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19608cefdc9a37cbf1feac02b4438d8b36982d3bcb836c376b62592eaa3cc173->enter($__internal_19608cefdc9a37cbf1feac02b4438d8b36982d3bcb836c376b62592eaa3cc173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_445fb09bd4a794c764c919f89b0f81dd5b0f6893969fa6fd603b56ed9141765e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445fb09bd4a794c764c919f89b0f81dd5b0f6893969fa6fd603b56ed9141765e->enter($__internal_445fb09bd4a794c764c919f89b0f81dd5b0f6893969fa6fd603b56ed9141765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_445fb09bd4a794c764c919f89b0f81dd5b0f6893969fa6fd603b56ed9141765e->leave($__internal_445fb09bd4a794c764c919f89b0f81dd5b0f6893969fa6fd603b56ed9141765e_prof);

        
        $__internal_19608cefdc9a37cbf1feac02b4438d8b36982d3bcb836c376b62592eaa3cc173->leave($__internal_19608cefdc9a37cbf1feac02b4438d8b36982d3bcb836c376b62592eaa3cc173_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4151821c1423473bffa5b50a47c47193585f78d394dcc4756bfde89ed401fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4151821c1423473bffa5b50a47c47193585f78d394dcc4756bfde89ed401fc3->enter($__internal_c4151821c1423473bffa5b50a47c47193585f78d394dcc4756bfde89ed401fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac91741eef1f70b04957597d652236e50420a590104f07fb71b6dd84e5a581c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac91741eef1f70b04957597d652236e50420a590104f07fb71b6dd84e5a581c3->enter($__internal_ac91741eef1f70b04957597d652236e50420a590104f07fb71b6dd84e5a581c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                ";
        } else {
            // line 17
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 19
        echo "            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 25
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:show.html.twig", 25)->display($context);
        // line 26
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 28
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:show.html.twig", 28)->display($context);
        // line 29
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "client", array()), "denomination", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "intitule", array())), "html", null, true);
        echo "</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE SUIVI PAR POSTE:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_edit", array("id" => $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "id", array()))), "html", null, true);
        echo "\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Candidat</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "client", array()), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitulé du poste</th>
                <td>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'intégration</th>
                <td>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    ";
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        // line 75
        echo "    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_gestion\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client pour cette offre d\\'emploi ?');\">Supprimer</button>
            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\" col-lg-offset-1 col-lg-10\" id=\"msg_gestion\">
            ";
        // line 85
        if (($this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "civilite", array()) == "Monsieur")) {
            // line 86
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
            echo " est désormais recruté pour ce poste, sa date d'intégration en entreprise est prévue le ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
            echo ".
            ";
        } else {
            // line 88
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
            echo " est désormais recrutée pour ce poste, sa date d'intégration en entreprise est prévue le ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
            echo ".
            ";
        }
        // line 90
        echo "        </div>
    </div>


";
        
        $__internal_ac91741eef1f70b04957597d652236e50420a590104f07fb71b6dd84e5a581c3->leave($__internal_ac91741eef1f70b04957597d652236e50420a590104f07fb71b6dd84e5a581c3_prof);

        
        $__internal_c4151821c1423473bffa5b50a47c47193585f78d394dcc4756bfde89ed401fc3->leave($__internal_c4151821c1423473bffa5b50a47c47193585f78d394dcc4756bfde89ed401fc3_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 90,  238 => 88,  228 => 86,  226 => 85,  217 => 79,  212 => 77,  208 => 75,  206 => 74,  204 => 73,  202 => 72,  200 => 71,  198 => 70,  190 => 64,  183 => 60,  176 => 56,  167 => 52,  154 => 42,  146 => 39,  135 => 33,  129 => 29,  127 => 28,  123 => 26,  121 => 25,  113 => 20,  110 => 19,  104 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
     <link href=\"{{ asset ('css/client.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}
{% block javascripts %}
{% endblock %}

{% block body %}

    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-2\" style=\"margin-left: -120px\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
            <div class=\"col-lg-offset-11\" style=\"padding-top: 10px\" id=\"logout\"><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"material-icons\">input</i></a></div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    {% include 'navbar.html.twig' %}
    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    {% include 'sidebar.html.twig' %}
    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>{{ gestion.emploi.client.denomination }} | {{ gestion.emploi.intitule|upper }}</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE SUIVI PAR POSTE:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\"><h1>{{ gestion.candidat.nom|upper }} {{ gestion.candidat.prenom }}</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path('ma_lrm_gestion_edit', { 'id': gestion.id }) }}\" >METTRE A JOUR</a>
        </div>
    </div>


    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Candidat</th>
                <td>{{ gestion.candidat.nom }} {{ gestion.candidat.prenom }}</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>{{ gestion.emploi.client.denomination }}</td>
            </tr>
            <tr>
                <th>Intitulé du poste</th>
                <td>{{ gestion.emploi.intitule }}</td>
            </tr>
            <tr>
                <th>Date d'intégration</th>
                <td>{{ gestion.dateIntegration }}</td>
            </tr>
            </tbody>
        </table>
    </div>
    {#<div class=\"row\">#}
    {#<div class=\"col-lg-2\">Commentaires</div>#}
    {#<div class=\"row\">#}
    {#<div class=\"col-lg-4\">{{ emploi.commentaire }}</div>#}
    {#</div>#}
    {#</div>#}
    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            {{ form_start(delete_form) }}
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_gestion\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client pour cette offre d\\'emploi ?');\">Supprimer</button>
            {{ form_end(delete_form) }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\" col-lg-offset-1 col-lg-10\" id=\"msg_gestion\">
            {% if gestion.candidat.civilite == \"Monsieur\" %}
                {{ gestion.candidat.nom}} {{ gestion.candidat.prenom }} est désormais recruté pour ce poste, sa date d'intégration en entreprise est prévue le {{ gestion.dateIntegration }}.
            {% else %}
                {{ gestion.candidat.nom}} {{ gestion.candidat.prenom }} est désormais recrutée pour ce poste, sa date d'intégration en entreprise est prévue le {{ gestion.dateIntegration }}.
            {% endif %}
        </div>
    </div>


{% endblock %}", "MALrmBundle:Gestion:show.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/show.html.twig");
    }
}
