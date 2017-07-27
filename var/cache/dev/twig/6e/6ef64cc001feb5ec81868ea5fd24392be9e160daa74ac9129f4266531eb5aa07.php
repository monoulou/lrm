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
        $__internal_b468d62f38ea30a46242b74090faecadedfc2e25f39e127144cb97e181f0776b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b468d62f38ea30a46242b74090faecadedfc2e25f39e127144cb97e181f0776b->enter($__internal_b468d62f38ea30a46242b74090faecadedfc2e25f39e127144cb97e181f0776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $__internal_5fbe2876c4e15063eb93a3550ebbf55ddbe442f840473c4dbb5866c66381f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fbe2876c4e15063eb93a3550ebbf55ddbe442f840473c4dbb5866c66381f96f->enter($__internal_5fbe2876c4e15063eb93a3550ebbf55ddbe442f840473c4dbb5866c66381f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MALrmBundle:Gestion:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b468d62f38ea30a46242b74090faecadedfc2e25f39e127144cb97e181f0776b->leave($__internal_b468d62f38ea30a46242b74090faecadedfc2e25f39e127144cb97e181f0776b_prof);

        
        $__internal_5fbe2876c4e15063eb93a3550ebbf55ddbe442f840473c4dbb5866c66381f96f->leave($__internal_5fbe2876c4e15063eb93a3550ebbf55ddbe442f840473c4dbb5866c66381f96f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_701f42c829ad7ba2c8dd38b53fd74186a3fde108f5af388809acc5ccd3e3a7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701f42c829ad7ba2c8dd38b53fd74186a3fde108f5af388809acc5ccd3e3a7d3->enter($__internal_701f42c829ad7ba2c8dd38b53fd74186a3fde108f5af388809acc5ccd3e3a7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cb3d0fcb4a7dd341662e4094d7a88ea45c58a63e0a0cb8f5f601ea606111e6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3d0fcb4a7dd341662e4094d7a88ea45c58a63e0a0cb8f5f601ea606111e6c0->enter($__internal_cb3d0fcb4a7dd341662e4094d7a88ea45c58a63e0a0cb8f5f601ea606111e6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_cb3d0fcb4a7dd341662e4094d7a88ea45c58a63e0a0cb8f5f601ea606111e6c0->leave($__internal_cb3d0fcb4a7dd341662e4094d7a88ea45c58a63e0a0cb8f5f601ea606111e6c0_prof);

        
        $__internal_701f42c829ad7ba2c8dd38b53fd74186a3fde108f5af388809acc5ccd3e3a7d3->leave($__internal_701f42c829ad7ba2c8dd38b53fd74186a3fde108f5af388809acc5ccd3e3a7d3_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e332caceb2b99c620b6a2955411700e8421c033b24fd65ccd70a471621e7762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e332caceb2b99c620b6a2955411700e8421c033b24fd65ccd70a471621e7762->enter($__internal_0e332caceb2b99c620b6a2955411700e8421c033b24fd65ccd70a471621e7762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_56a20c2d14f516d926428ee3e300e02e1e96b2ae9cad9ddd7d49770d415d74bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56a20c2d14f516d926428ee3e300e02e1e96b2ae9cad9ddd7d49770d415d74bb->enter($__internal_56a20c2d14f516d926428ee3e300e02e1e96b2ae9cad9ddd7d49770d415d74bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_56a20c2d14f516d926428ee3e300e02e1e96b2ae9cad9ddd7d49770d415d74bb->leave($__internal_56a20c2d14f516d926428ee3e300e02e1e96b2ae9cad9ddd7d49770d415d74bb_prof);

        
        $__internal_0e332caceb2b99c620b6a2955411700e8421c033b24fd65ccd70a471621e7762->leave($__internal_0e332caceb2b99c620b6a2955411700e8421c033b24fd65ccd70a471621e7762_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2cac659e7bbf1e7c87b5f0683713bea613f19a5933cb3654dfc9c8d21c541a24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cac659e7bbf1e7c87b5f0683713bea613f19a5933cb3654dfc9c8d21c541a24->enter($__internal_2cac659e7bbf1e7c87b5f0683713bea613f19a5933cb3654dfc9c8d21c541a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27b95ec91f65dc25f370dc70db88c484fd9b5289883b7d17ca9361c7f8b7091c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b95ec91f65dc25f370dc70db88c484fd9b5289883b7d17ca9361c7f8b7091c->enter($__internal_27b95ec91f65dc25f370dc70db88c484fd9b5289883b7d17ca9361c7f8b7091c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "\">Modifier</a>/<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_delete", array("id" => $this->getAttribute((isset($context["arrCandidat"]) ? $context["arrCandidat"] : $this->getContext($context, "arrCandidat")), $this->getAttribute((isset($context["candidat"]) ? $context["candidat"] : $this->getContext($context, "candidat")), "id", array()), array(), "array"))), "html", null, true);
        echo "\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";>Supprimer</a>
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
        
        $__internal_27b95ec91f65dc25f370dc70db88c484fd9b5289883b7d17ca9361c7f8b7091c->leave($__internal_27b95ec91f65dc25f370dc70db88c484fd9b5289883b7d17ca9361c7f8b7091c_prof);

        
        $__internal_2cac659e7bbf1e7c87b5f0683713bea613f19a5933cb3654dfc9c8d21c541a24->leave($__internal_2cac659e7bbf1e7c87b5f0683713bea613f19a5933cb3654dfc9c8d21c541a24_prof);

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
                    <a href=\"{{ path ('ma_lrm_gestion_edit', { 'id': arrCandidat[candidat.id]}) }}\">Modifier</a>/<a href=\"{{ path ('ma_lrm_gestion_delete', { 'id': arrCandidat[candidat.id]}) }}\" onclick=\"return confirm('Souhaitez-vous confirmer la suppression de ce candidat pour ce poste ?')\";>Supprimer</a>
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
