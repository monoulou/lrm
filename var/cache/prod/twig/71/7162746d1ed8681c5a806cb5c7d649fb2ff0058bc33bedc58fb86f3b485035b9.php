<?php

/* navbar.html.twig */
class __TwigTemplate_fac953e352ff31bc3184a58ac397206b7d1f4c854448173655f8baa3c48724ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204d7a977b0aed278e78f641f79f2395bc60b5d8ded52b8c99a01dd6b4f3d0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204d7a977b0aed278e78f641f79f2395bc60b5d8ded52b8c99a01dd6b4f3d0e2->enter($__internal_204d7a977b0aed278e78f641f79f2395bc60b5d8ded52b8c99a01dd6b4f3d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\" style=\"margin-top: 5px\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">LRM</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_accueil");
        echo "\">Accueil</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Candidats <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_new");
        echo "\">Ajouter un candidat</a></li>
                        <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_candidat_index");
        echo "\">Liste des candidats</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clients <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_new");
        echo "\">Ajouter un client</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_client_index");
        echo "\">Liste des clients</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_new");
        echo "\">Ajouter une offre</a></li>
                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_emploi_index");
        echo "\">Liste des offres</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_new");
        echo "\">Pourvoir une offre</a></li>
                        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ma_lrm_gestion_index");
        echo "\">Suivre les offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
        
        $__internal_204d7a977b0aed278e78f641f79f2395bc60b5d8ded52b8c99a01dd6b4f3d0e2->leave($__internal_204d7a977b0aed278e78f641f79f2395bc60b5d8ded52b8c99a01dd6b4f3d0e2_prof);

    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 37,  80 => 36,  71 => 30,  67 => 29,  58 => 23,  54 => 22,  45 => 16,  41 => 15,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\" style=\"margin-top: 5px\" role=\"navigation\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex2-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">LRM</a>
        </div>
        <div class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('ma_lrm_accueil') }}\">Accueil</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Candidats <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_candidat_new') }}\">Ajouter un candidat</a></li>
                        <li><a href=\"{{ path('ma_lrm_candidat_index') }}\">Liste des candidats</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Clients <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_client_new') }}\">Ajouter un client</a></li>
                        <li><a href=\"{{ path('ma_lrm_client_index') }}\">Liste des clients</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Emploi <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_emploi_new') }}\">Ajouter une offre</a></li>
                        <li><a href=\"{{ path('ma_lrm_emploi_index') }}\">Liste des offres</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Gestion <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu dropdown-menu-default\">
                        <li><a href=\"{{ path('ma_lrm_gestion_new') }}\">Pourvoir une offre</a></li>
                        <li><a href=\"{{ path('ma_lrm_gestion_index') }}\">Suivre les offres</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
", "navbar.html.twig", "C:\\wamp64\\www\\ligne_rh\\app\\Resources\\views\\navbar.html.twig");
    }
}
