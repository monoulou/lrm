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
        $__internal_67b51d459370ea60573d6d351099804582454eecf71c2cae2ce996ce78975d86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b51d459370ea60573d6d351099804582454eecf71c2cae2ce996ce78975d86->enter($__internal_67b51d459370ea60573d6d351099804582454eecf71c2cae2ce996ce78975d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $__internal_46c23de3f29b304bed0e176ab86f1d43ae457440cfaec4aecf2981f1f90c9384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c23de3f29b304bed0e176ab86f1d43ae457440cfaec4aecf2981f1f90c9384->enter($__internal_46c23de3f29b304bed0e176ab86f1d43ae457440cfaec4aecf2981f1f90c9384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67b51d459370ea60573d6d351099804582454eecf71c2cae2ce996ce78975d86->leave($__internal_67b51d459370ea60573d6d351099804582454eecf71c2cae2ce996ce78975d86_prof);

        
        $__internal_46c23de3f29b304bed0e176ab86f1d43ae457440cfaec4aecf2981f1f90c9384->leave($__internal_46c23de3f29b304bed0e176ab86f1d43ae457440cfaec4aecf2981f1f90c9384_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7b402bbc5b87f4585da9b3b1e7b31df6049758574f89f4d298eced0d6a04a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b402bbc5b87f4585da9b3b1e7b31df6049758574f89f4d298eced0d6a04a7e->enter($__internal_b7b402bbc5b87f4585da9b3b1e7b31df6049758574f89f4d298eced0d6a04a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07eda34ed9100f96837eaa3aa1e57af1be735e0a0f0c35a16e33a5d2ebf29961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eda34ed9100f96837eaa3aa1e57af1be735e0a0f0c35a16e33a5d2ebf29961->enter($__internal_07eda34ed9100f96837eaa3aa1e57af1be735e0a0f0c35a16e33a5d2ebf29961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_07eda34ed9100f96837eaa3aa1e57af1be735e0a0f0c35a16e33a5d2ebf29961->leave($__internal_07eda34ed9100f96837eaa3aa1e57af1be735e0a0f0c35a16e33a5d2ebf29961_prof);

        
        $__internal_b7b402bbc5b87f4585da9b3b1e7b31df6049758574f89f4d298eced0d6a04a7e->leave($__internal_b7b402bbc5b87f4585da9b3b1e7b31df6049758574f89f4d298eced0d6a04a7e_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00b56b607281e7c0ce28f798618f5bfabd826bc0fc22f4ab69a66a1cc1c0fb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b56b607281e7c0ce28f798618f5bfabd826bc0fc22f4ab69a66a1cc1c0fb17->enter($__internal_00b56b607281e7c0ce28f798618f5bfabd826bc0fc22f4ab69a66a1cc1c0fb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_60035c2c71e84a8d5ee095fde19bd919db5e5a342c56146053a52f2bcf5220dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60035c2c71e84a8d5ee095fde19bd919db5e5a342c56146053a52f2bcf5220dd->enter($__internal_60035c2c71e84a8d5ee095fde19bd919db5e5a342c56146053a52f2bcf5220dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_60035c2c71e84a8d5ee095fde19bd919db5e5a342c56146053a52f2bcf5220dd->leave($__internal_60035c2c71e84a8d5ee095fde19bd919db5e5a342c56146053a52f2bcf5220dd_prof);

        
        $__internal_00b56b607281e7c0ce28f798618f5bfabd826bc0fc22f4ab69a66a1cc1c0fb17->leave($__internal_00b56b607281e7c0ce28f798618f5bfabd826bc0fc22f4ab69a66a1cc1c0fb17_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3923bed7b6acdec8f9ca4243f287df7cfd2938e17087c2e2099e1ddb4f2ab49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3923bed7b6acdec8f9ca4243f287df7cfd2938e17087c2e2099e1ddb4f2ab49->enter($__internal_b3923bed7b6acdec8f9ca4243f287df7cfd2938e17087c2e2099e1ddb4f2ab49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d70ea9b72e8fad6f9246ffc4102c1533bfb21b06fdc8013f441b8b116c7837f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d70ea9b72e8fad6f9246ffc4102c1533bfb21b06fdc8013f441b8b116c7837f->enter($__internal_1d70ea9b72e8fad6f9246ffc4102c1533bfb21b06fdc8013f441b8b116c7837f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1d70ea9b72e8fad6f9246ffc4102c1533bfb21b06fdc8013f441b8b116c7837f->leave($__internal_1d70ea9b72e8fad6f9246ffc4102c1533bfb21b06fdc8013f441b8b116c7837f_prof);

        
        $__internal_b3923bed7b6acdec8f9ca4243f287df7cfd2938e17087c2e2099e1ddb4f2ab49->leave($__internal_b3923bed7b6acdec8f9ca4243f287df7cfd2938e17087c2e2099e1ddb4f2ab49_prof);

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
