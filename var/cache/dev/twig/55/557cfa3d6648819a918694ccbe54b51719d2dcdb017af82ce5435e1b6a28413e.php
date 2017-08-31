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
        $__internal_3338e1100d7239e934a066f21603c2382248c2fd2112e5394f9c3a270df939f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3338e1100d7239e934a066f21603c2382248c2fd2112e5394f9c3a270df939f7->enter($__internal_3338e1100d7239e934a066f21603c2382248c2fd2112e5394f9c3a270df939f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $__internal_44850f337ece97a289ee1de5f3e442634c7d0d15df544d8a7a59a433b41b8d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44850f337ece97a289ee1de5f3e442634c7d0d15df544d8a7a59a433b41b8d20->enter($__internal_44850f337ece97a289ee1de5f3e442634c7d0d15df544d8a7a59a433b41b8d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3338e1100d7239e934a066f21603c2382248c2fd2112e5394f9c3a270df939f7->leave($__internal_3338e1100d7239e934a066f21603c2382248c2fd2112e5394f9c3a270df939f7_prof);

        
        $__internal_44850f337ece97a289ee1de5f3e442634c7d0d15df544d8a7a59a433b41b8d20->leave($__internal_44850f337ece97a289ee1de5f3e442634c7d0d15df544d8a7a59a433b41b8d20_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b05755475cce2e22bd97b7276c588848ee3f862bb5598644ddecb29216e61858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05755475cce2e22bd97b7276c588848ee3f862bb5598644ddecb29216e61858->enter($__internal_b05755475cce2e22bd97b7276c588848ee3f862bb5598644ddecb29216e61858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64be3d9a486bd6c2ae60768ca24b4c130e04a86131c0a5cdcdbaa25b637132a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64be3d9a486bd6c2ae60768ca24b4c130e04a86131c0a5cdcdbaa25b637132a5->enter($__internal_64be3d9a486bd6c2ae60768ca24b4c130e04a86131c0a5cdcdbaa25b637132a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_64be3d9a486bd6c2ae60768ca24b4c130e04a86131c0a5cdcdbaa25b637132a5->leave($__internal_64be3d9a486bd6c2ae60768ca24b4c130e04a86131c0a5cdcdbaa25b637132a5_prof);

        
        $__internal_b05755475cce2e22bd97b7276c588848ee3f862bb5598644ddecb29216e61858->leave($__internal_b05755475cce2e22bd97b7276c588848ee3f862bb5598644ddecb29216e61858_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65920ce257002ed6007e1107ad396e66b9e8daed52bdee389990226e5ca9b92e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65920ce257002ed6007e1107ad396e66b9e8daed52bdee389990226e5ca9b92e->enter($__internal_65920ce257002ed6007e1107ad396e66b9e8daed52bdee389990226e5ca9b92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5cd696a4a4021e8d8e01a24b42dfa3e7a994dbda8c07b62ce3a47b1cdd504cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd696a4a4021e8d8e01a24b42dfa3e7a994dbda8c07b62ce3a47b1cdd504cf6->enter($__internal_5cd696a4a4021e8d8e01a24b42dfa3e7a994dbda8c07b62ce3a47b1cdd504cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5cd696a4a4021e8d8e01a24b42dfa3e7a994dbda8c07b62ce3a47b1cdd504cf6->leave($__internal_5cd696a4a4021e8d8e01a24b42dfa3e7a994dbda8c07b62ce3a47b1cdd504cf6_prof);

        
        $__internal_65920ce257002ed6007e1107ad396e66b9e8daed52bdee389990226e5ca9b92e->leave($__internal_65920ce257002ed6007e1107ad396e66b9e8daed52bdee389990226e5ca9b92e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_73136ffcab8115a7056e90c3af8df1cc8d11400c81d7d43126fd74c820fca542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73136ffcab8115a7056e90c3af8df1cc8d11400c81d7d43126fd74c820fca542->enter($__internal_73136ffcab8115a7056e90c3af8df1cc8d11400c81d7d43126fd74c820fca542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79c22a3120d8f782a9eea3770b751f5d834d05d81de7dd7de502ac9d1d645776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79c22a3120d8f782a9eea3770b751f5d834d05d81de7dd7de502ac9d1d645776->enter($__internal_79c22a3120d8f782a9eea3770b751f5d834d05d81de7dd7de502ac9d1d645776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
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
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 24
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:show.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:show.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>";
        // line 32
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
        // line 38
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</h1></div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 41
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
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "client", array()), "denomination", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Intitulé du poste</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "emploi", array()), "intitule", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date d'intégration</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>
    ";
        // line 69
        echo "    ";
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        // line 72
        echo "    ";
        // line 73
        echo "    ";
        // line 74
        echo "    <div class=\"row\">
        <div class=\"col-lg-offset-10 col-lg-2\">
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
            <button id=\"delete_button\" type=\"submit\" class=\"btn  btn-default\" name=\"delete_gestion\" data-dismiss=\"modal\" onclick=\"return confirm('Souhaitez-vous vraiment supprimer ce client pour cette offre d\\'emploi ?');\">Supprimer</button>
            ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\" col-lg-offset-1 col-lg-10\" id=\"msg_gestion\">
            ";
        // line 84
        if (($this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "civilite", array()) == "Monsieur")) {
            // line 85
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
            echo " est désormais recruté pour ce poste, sa date d'intégration en entreprise est prévue le ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
            echo ".
            ";
        } else {
            // line 87
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "candidat", array()), "prenom", array()), "html", null, true);
            echo " est désormais recrutée pour ce poste, sa date d'intégration en entreprise est prévue le ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gestion"]) ? $context["gestion"] : $this->getContext($context, "gestion")), "dateIntegration", array()), "html", null, true);
            echo ".
            ";
        }
        // line 89
        echo "        </div>
    </div>


";
        
        $__internal_79c22a3120d8f782a9eea3770b751f5d834d05d81de7dd7de502ac9d1d645776->leave($__internal_79c22a3120d8f782a9eea3770b751f5d834d05d81de7dd7de502ac9d1d645776_prof);

        
        $__internal_73136ffcab8115a7056e90c3af8df1cc8d11400c81d7d43126fd74c820fca542->leave($__internal_73136ffcab8115a7056e90c3af8df1cc8d11400c81d7d43126fd74c820fca542_prof);

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
        return array (  246 => 89,  236 => 87,  226 => 85,  224 => 84,  215 => 78,  210 => 76,  206 => 74,  204 => 73,  202 => 72,  200 => 71,  198 => 70,  196 => 69,  188 => 63,  181 => 59,  174 => 55,  165 => 51,  152 => 41,  144 => 38,  133 => 32,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
            <div class=\"col-lg-offset-10\">
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <i class=\"material-icons\">person</i> Bonjour, {{ app.user.username }}--<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
                {% else %}
                    <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
                {% endif %}
            </div>
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
