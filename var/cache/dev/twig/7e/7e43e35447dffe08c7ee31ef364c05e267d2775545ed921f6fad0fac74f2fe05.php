<?php

/* @MALrm/Gestion/index.html.twig */
class __TwigTemplate_52d437d60636e6e399b01ace86d58a74e4e7bbb2c2eb6201f5a6582c106c8bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@MALrm/Gestion/index.html.twig", 1);
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
        $__internal_0b300b93d51860d5f08c3589fe9523c970de375aad56ddfc07ecb77cef5a0dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b300b93d51860d5f08c3589fe9523c970de375aad56ddfc07ecb77cef5a0dda->enter($__internal_0b300b93d51860d5f08c3589fe9523c970de375aad56ddfc07ecb77cef5a0dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/index.html.twig"));

        $__internal_f45ae96f1c59f4043011063bef969ba1177a3528c80615d69fbefac9e55e0887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f45ae96f1c59f4043011063bef969ba1177a3528c80615d69fbefac9e55e0887->enter($__internal_f45ae96f1c59f4043011063bef969ba1177a3528c80615d69fbefac9e55e0887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MALrm/Gestion/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b300b93d51860d5f08c3589fe9523c970de375aad56ddfc07ecb77cef5a0dda->leave($__internal_0b300b93d51860d5f08c3589fe9523c970de375aad56ddfc07ecb77cef5a0dda_prof);

        
        $__internal_f45ae96f1c59f4043011063bef969ba1177a3528c80615d69fbefac9e55e0887->leave($__internal_f45ae96f1c59f4043011063bef969ba1177a3528c80615d69fbefac9e55e0887_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8029d7326f9547dd594406d9c137078c914abd6d435832d117622256011209fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8029d7326f9547dd594406d9c137078c914abd6d435832d117622256011209fd->enter($__internal_8029d7326f9547dd594406d9c137078c914abd6d435832d117622256011209fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55e3ec80bf55ed6ef77440ab1aab8613d640c9b5dcbc26082017f6d830ccafab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e3ec80bf55ed6ef77440ab1aab8613d640c9b5dcbc26082017f6d830ccafab->enter($__internal_55e3ec80bf55ed6ef77440ab1aab8613d640c9b5dcbc26082017f6d830ccafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/client.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
     <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/css/dataTables.bootstrap.min.css"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
 ";
        
        $__internal_55e3ec80bf55ed6ef77440ab1aab8613d640c9b5dcbc26082017f6d830ccafab->leave($__internal_55e3ec80bf55ed6ef77440ab1aab8613d640c9b5dcbc26082017f6d830ccafab_prof);

        
        $__internal_8029d7326f9547dd594406d9c137078c914abd6d435832d117622256011209fd->leave($__internal_8029d7326f9547dd594406d9c137078c914abd6d435832d117622256011209fd_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3902741cca50ea4214443be904c771c76bd0654e8a64941960528440bff3567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3902741cca50ea4214443be904c771c76bd0654e8a64941960528440bff3567->enter($__internal_a3902741cca50ea4214443be904c771c76bd0654e8a64941960528440bff3567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1f84a9f67c6d7bee984a9ec67f9ad6cc8b7cd62783cdf16e59d53bab46a28a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f84a9f67c6d7bee984a9ec67f9ad6cc8b7cd62783cdf16e59d53bab46a28a89->enter($__internal_1f84a9f67c6d7bee984a9ec67f9ad6cc8b7cd62783cdf16e59d53bab46a28a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src =\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/media/js/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/tables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_1f84a9f67c6d7bee984a9ec67f9ad6cc8b7cd62783cdf16e59d53bab46a28a89->leave($__internal_1f84a9f67c6d7bee984a9ec67f9ad6cc8b7cd62783cdf16e59d53bab46a28a89_prof);

        
        $__internal_a3902741cca50ea4214443be904c771c76bd0654e8a64941960528440bff3567->leave($__internal_a3902741cca50ea4214443be904c771c76bd0654e8a64941960528440bff3567_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf97dae59104cdadcfb1dcd452337f26bf766bda81e2bbf3e93b75ef40924cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf97dae59104cdadcfb1dcd452337f26bf766bda81e2bbf3e93b75ef40924cdf->enter($__internal_bf97dae59104cdadcfb1dcd452337f26bf766bda81e2bbf3e93b75ef40924cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65609f12ade6b2fd3559e2440900f7ab1cb171de51b0ebfdb89f670585a6a457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65609f12ade6b2fd3559e2440900f7ab1cb171de51b0ebfdb89f670585a6a457->enter($__internal_65609f12ade6b2fd3559e2440900f7ab1cb171de51b0ebfdb89f670585a6a457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"container-fluid\" id=\"header_container\">
        <div class=\"row\">
            <div class=\"col-lg-offset-10\">
                ";
        // line 20
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 21
            echo "                    <i class=\"material-icons\">person</i> Bonjour, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                ";
        } else {
            // line 23
            echo "                    <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                ";
        }
        // line 25
        echo "            </div>
        </div>
    </div>
    <div class=\"container-fluid\" id=\"main_container\">
    <!-- START TOP NAVBAR-->
    ";
        // line 30
        $this->loadTemplate("navbar.html.twig", "@MALrm/Gestion/index.html.twig", 30)->display($context);
        // line 31
        echo "    <!-- END TOP NAVBAR -->
    <!-- START SIDEBAR-->
    ";
        // line 33
        $this->loadTemplate("sidebar.html.twig", "@MALrm/Gestion/index.html.twig", 33)->display($context);
        // line 34
        echo "    <!-- END SIDEBAR-->

    <div class=\"col-lg-9\" style=\"margin-left: 10px;\">
        <div class=\"row\">
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES:</h5>
        </div>

        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> ";
            // line 47
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "<i>alert-info</i>.
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suiviOffre"]) ? $context["suiviOffre"] : $this->getContext($context, "suiviOffre")));
        foreach ($context['_seq'] as $context["id"] => $context["offre"]) {
            // line 73
            echo "                    <tr>
                        <td> <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_resume", array("id" => $context["id"])), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 1, array(), "array"), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 2, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 3, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 4, array(), "array"), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], 5, array(), "array"), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_65609f12ade6b2fd3559e2440900f7ab1cb171de51b0ebfdb89f670585a6a457->leave($__internal_65609f12ade6b2fd3559e2440900f7ab1cb171de51b0ebfdb89f670585a6a457_prof);

        
        $__internal_bf97dae59104cdadcfb1dcd452337f26bf766bda81e2bbf3e93b75ef40924cdf->leave($__internal_bf97dae59104cdadcfb1dcd452337f26bf766bda81e2bbf3e93b75ef40924cdf_prof);

    }

    public function getTemplateName()
    {
        return "@MALrm/Gestion/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 81,  218 => 78,  214 => 77,  210 => 76,  206 => 75,  200 => 74,  197 => 73,  193 => 72,  169 => 50,  160 => 47,  156 => 45,  152 => 44,  140 => 34,  138 => 33,  134 => 31,  132 => 30,  125 => 25,  119 => 23,  111 => 21,  109 => 20,  103 => 16,  94 => 15,  82 => 10,  77 => 9,  68 => 8,  56 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
     <link href=\"{{ asset ('DataTables/media/css/dataTables.bootstrap.min.css') }}\" rel='stylesheet' type='text/css' />
 {% endblock %}

{% block javascripts %}
    <script src =\"{{ asset ('DataTables/media/js/dataTables.bootstrap.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('js/tables.js') }}\" type=\"text/javascript\"></script>
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
            <h3>SUIVI DES OFFRES</h3><hr style=\"border: 1px solid darkgray;\">
        </div>
        <div class=\"row\" id=\"head_row\">
            <h5>INTERFACE DE VISUALISATION DES OFFRES POURVUES:</h5>
        </div>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-info\" id=\"flash_message\">
                <i class=\"icon icon-info-circle icon-lg\"></i>
                <strong>Info !</strong> {{ flash_message }}<i>alert-info</i>.
            </div>
        {% endfor %}

        <div class=\"row\" style=\"margin-top: 20px\">
            <table id=\"client_table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Offre</th>
                    <th>Entreprise</th>
                    <th>Postes à pourvoir</th>
                    <th>Postes pourvus</th>
                    <th>Postes restant</th>
                </tr>
                </tfoot>
                <tbody>
                {% for id, offre in suiviOffre %}
                    <tr>
                        <td> <a href=\"{{ path('ma_lrm_gestion_resume', { 'id': id }) }}\" >{{ offre[1] }}</a></td>
                        <td>{{ offre[2] }}</td>
                        <td>{{ offre[3] }}</td>
                        <td>{{ offre[4] }}</td>
                        <td>{{ offre[5] }}</td>
                    </tr>
                {% endfor %}

                </tbody>
            </table>
        </div>
    </div>



{% endblock %}", "@MALrm/Gestion/index.html.twig", "C:\\wamp64\\www\\ligne_rh\\src\\MA\\LrmBundle\\Resources\\views\\Gestion\\index.html.twig");
    }
}
