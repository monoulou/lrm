<?php

/* MALrmBundle:Gestion:detail.html.twig */
class __TwigTemplate_b1e9514306bd578d7e879a95ad46cd2fd87c7bd4f8c78c801d050ab71892aea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MALrmBundle:Gestion:detail.html.twig", 1);
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
        $__internal_2aa0f027a256c686c51020e3da4b1f649d663029d7a54668a867086073a9dbae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aa0f027a256c686c51020e3da4b1f649d663029d7a54668a867086073a9dbae->enter($__internal_2aa0f027a256c686c51020e3da4b1f649d663029d7a54668a867086073a9dbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $__internal_960580e24b386e1a72f5099b0ba728f5d1a3482f22d476cf2038818a29119ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960580e24b386e1a72f5099b0ba728f5d1a3482f22d476cf2038818a29119ffa->enter($__internal_960580e24b386e1a72f5099b0ba728f5d1a3482f22d476cf2038818a29119ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aa0f027a256c686c51020e3da4b1f649d663029d7a54668a867086073a9dbae->leave($__internal_2aa0f027a256c686c51020e3da4b1f649d663029d7a54668a867086073a9dbae_prof);

        
        $__internal_960580e24b386e1a72f5099b0ba728f5d1a3482f22d476cf2038818a29119ffa->leave($__internal_960580e24b386e1a72f5099b0ba728f5d1a3482f22d476cf2038818a29119ffa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_78b2338be97e8c936434d6723a904ed0db88976d37aaf9e1eb28e7a26e72a02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78b2338be97e8c936434d6723a904ed0db88976d37aaf9e1eb28e7a26e72a02a->enter($__internal_78b2338be97e8c936434d6723a904ed0db88976d37aaf9e1eb28e7a26e72a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3b1f8bda05678cb95da8e667a85e272e7d659d5e8430992799edf737863ac466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1f8bda05678cb95da8e667a85e272e7d659d5e8430992799edf737863ac466->enter($__internal_3b1f8bda05678cb95da8e667a85e272e7d659d5e8430992799edf737863ac466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_3b1f8bda05678cb95da8e667a85e272e7d659d5e8430992799edf737863ac466->leave($__internal_3b1f8bda05678cb95da8e667a85e272e7d659d5e8430992799edf737863ac466_prof);

        
        $__internal_78b2338be97e8c936434d6723a904ed0db88976d37aaf9e1eb28e7a26e72a02a->leave($__internal_78b2338be97e8c936434d6723a904ed0db88976d37aaf9e1eb28e7a26e72a02a_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_306780dfddf1c601ca2bf227e65077c2bc1afd8be31d71aa9c0690bb8b87e0cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306780dfddf1c601ca2bf227e65077c2bc1afd8be31d71aa9c0690bb8b87e0cf->enter($__internal_306780dfddf1c601ca2bf227e65077c2bc1afd8be31d71aa9c0690bb8b87e0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1bdd79eec5df94ef401b8532857f104891f57d1f5d78a16e43a40d4cad5d919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bdd79eec5df94ef401b8532857f104891f57d1f5d78a16e43a40d4cad5d919f->enter($__internal_1bdd79eec5df94ef401b8532857f104891f57d1f5d78a16e43a40d4cad5d919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1bdd79eec5df94ef401b8532857f104891f57d1f5d78a16e43a40d4cad5d919f->leave($__internal_1bdd79eec5df94ef401b8532857f104891f57d1f5d78a16e43a40d4cad5d919f_prof);

        
        $__internal_306780dfddf1c601ca2bf227e65077c2bc1afd8be31d71aa9c0690bb8b87e0cf->leave($__internal_306780dfddf1c601ca2bf227e65077c2bc1afd8be31d71aa9c0690bb8b87e0cf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_21bd76ac0ba0e5d007268f14f2f55e2c1084d94d7e642ffd81977617d4386bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21bd76ac0ba0e5d007268f14f2f55e2c1084d94d7e642ffd81977617d4386bed->enter($__internal_21bd76ac0ba0e5d007268f14f2f55e2c1084d94d7e642ffd81977617d4386bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81757b18f8a9c0d9bf4d4c17c0c9cb3777c8ed22cd97db480d552d94ba433d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81757b18f8a9c0d9bf4d4c17c0c9cb3777c8ed22cd97db480d552d94ba433d52->enter($__internal_81757b18f8a9c0d9bf4d4c17c0c9cb3777c8ed22cd97db480d552d94ba433d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("navbar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 24)->display($context);
        // line 25
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 27
        $this->loadTemplate("sidebar.html.twig", "MALrmBundle:Gestion:detail.html.twig", 27)->display($context);
        // line 28
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
    <div class=\"row\">
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\">
            <h1>";
        // line 39
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</h1>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_edit", array("id" => $this->getAttribute((isset($context["arrCandidat"]) ? $context["arrCandidat"] : $this->getContext($context, "arrCandidat")), $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), array(), "array"))), "html", null, true);
        echo "\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_delete", array("id" => $this->getAttribute((isset($context["arrCandidat"]) ? $context["arrCandidat"] : $this->getContext($context, "arrCandidat")), $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), array(), "array"))), "html", null, true);
        echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";><i class=\"material-icons\" style=\"margin-left: 10px\">delete</i></a>
        </div>


    </div>

    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de candidat</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "prenom", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "age", array()), "html", null, true);
        echo " ans</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "adresse", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "villeCodePostal", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "ville", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "telephone", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/cvtheque/" . $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "cvCandidat", array()), "html", null, true);
        echo "</a></td>
                ";
        // line 84
        echo "            </tr>
            <tr>
                <th>Commentaires</th>
                <td>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "commentaire", array()), "html", null, true);
        echo "</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $this->getAttribute($this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "emploi", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
";
        
        $__internal_81757b18f8a9c0d9bf4d4c17c0c9cb3777c8ed22cd97db480d552d94ba433d52->leave($__internal_81757b18f8a9c0d9bf4d4c17c0c9cb3777c8ed22cd97db480d552d94ba433d52_prof);

        
        $__internal_21bd76ac0ba0e5d007268f14f2f55e2c1084d94d7e642ffd81977617d4386bed->leave($__internal_21bd76ac0ba0e5d007268f14f2f55e2c1084d94d7e642ffd81977617d4386bed_prof);

    }

    public function getTemplateName()
    {
        return "MALrmBundle:Gestion:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 95,  229 => 87,  224 => 84,  218 => 82,  211 => 78,  204 => 74,  193 => 70,  186 => 66,  179 => 62,  172 => 58,  165 => 54,  149 => 43,  140 => 39,  127 => 28,  125 => 27,  121 => 25,  119 => 24,  112 => 19,  106 => 17,  98 => 15,  96 => 14,  90 => 10,  81 => 9,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
        <h3>PROFIL CANDIDAT</h3><hr style=\"border: 1px solid darkgray;\">
    </div>
    <div class=\"row\" id=\"head_row\">
        <h5>INTERFACE DE VISUALISATION D'UN CANDIDAT:</h5>
    </div>
    <div class=\"row\">
        <div class=\" col-lg-5\">
            <h1>{{ candidat.nom|upper }} {{ candidat.prenom }}</h1>
        </div>

        <div class=\"col-lg-offset-4 col-lg-3\" id=\"edit\">
            <a href=\"{{ path ('ma_lrm_gestion_edit', { 'id': arrCandidat[candidat.id]}) }}\"><i class=\"material-icons\" style=\"margin-left: 40px\">mode_edit</i></a><a href=\"{{ path ('ma_lrm_gestion_delete', { 'id': arrCandidat[candidat.id]}) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";><i class=\"material-icons\" style=\"margin-left: 10px\">delete</i></a>
        </div>


    </div>

    <div class=\"row\">
        <table class=\"table table-striped\" id=\"show_client\">
            <tbody>
            <tr>
                <th>Numéro de candidat</th>
                <td>{{ candidat.id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ candidat.nom }}</td>
            </tr>
            <tr>
                <th>Prenom</th>
                <td>{{ candidat.prenom }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ candidat.age }} ans</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ candidat.adresse }} - {{ candidat.villeCodePostal }} - {{ candidat.ville }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ candidat.telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ candidat.email }}</td>
            </tr>
            <tr>
                <th>CV</th>
                <td><a href=\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</a></td>
                {#<td><iframe src =\"{{ asset('uploads/cvtheque/' ~ candidat.cvCandidat) }}\">{{ candidat.cvCandidat }}</iframe></td>#}
            </tr>
            <tr>
                <th>Commentaires</th>
                <td>{{ candidat.commentaire }}</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class=\"row\">
        <div class=\"col-lg-offset-11\">
            <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': candidat.emploi.id }) }}\"><i class=\"material-icons\" id=\"previous\">skip_previous</i></a>
        </div>
    </div>
{% endblock %}", "MALrmBundle:Gestion:detail.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle/Resources/views/Gestion/detail.html.twig");
    }
}